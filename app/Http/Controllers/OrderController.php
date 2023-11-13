<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderCollection;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function index(){
        return new OrderCollection(
            Order::with('user')
                ->with(['orderDetails' => function ($query) {
                    $query->with('product');
                }])
                ->get()
        );
    }

    public function searchByName(Request $request){
        $userName = $request->searchTerm;
        return new OrderCollection(
            Order::whereHas('user', function ($query) use ($userName) {
                $query->where('name', 'like', "%$userName%");
            })
            ->with(['user', 'orderDetails.product'])
            ->get()
        );
    }

    public function show()
    {
        // Obtén el usuario autenticado
        $user = Auth::user();

        if (!$user) {
            return response()->json(['error' => 'Usuario no autenticado'], 401);
        }

        // Obtén todas las órdenes del usuario con sus detalles y productos asociados
        $orders = Order::where('user_id', $user->id)
            ->with(['orderDetails' => function ($query) {
                $query->with('product');
            }])
            ->get();

        return new OrderCollection($orders);
    }

    public function store(Request $request){
        $request->validate(['payment_method' => 'required|string']);

        if (Auth::check()){
            $user = Auth::user();
            
            $total = 0; // Inicializa el total en 0

            $cart = $user->carts->first();

            if ($cart) {
                $cartItems = $cart->cartItems; 

                if ($cartItems->isEmpty()) {
                    return response()->json(['error' => 'The cart is empty'], 400);
                } else {
                    if($this->amountStock($cartItems)){
                        foreach ($cartItems as $cartItem) {
                            $productPrice = $cartItem->product->price; // Precio del producto
                            $quantity = $cartItem->quantity; // Cantidad del producto
                            $discount = $cartItem->product->discount; // Descuento del producto

                            // Calcula el subtotal teniendo en cuenta el descuento
                            $subtotal = ($productPrice - ($productPrice * ($discount / 100))) * $quantity;

                            $total += $subtotal; // Suma el subtotal al total
                            // Actualiza el stock del producto
                            $product = $cartItem->product;
                            $product->stock -= $cartItem->quantity;
                            $product->save(); // Guarda la actualización en la base de datos
                        }
                    } else {
                        return response()->json(['error', 'The amount of the one product is over than stock'],400);
                    }
                }
            } else {
                response()->json(['message' => 'User do not have a cart'], 404);
            }

            $order = new Order();
            $order->user_id = $user->id;
            $order->order_date = now();
            $order->status = 'pending';
            $order->shipping_address = $user->shipping_address;
            $order->payment_method = $request->payment_method;
            $order->total = $total;
            $order->save();

            $cartItems = $cart->cartItems;
            $id = $order->id;

            foreach ($cartItems as $cartItem) {
                // Crea una fila en la tabla "order_details" para cada producto en el carrito
                $quantity = $cartItem->quantity; // Cantidad del producto
                $discount = $cartItem->product->discount; // Descuento del producto
                $productPrice = $cartItem->product->price; // Precio del producto
                $productPriceDiscount = $productPrice - ($productPrice * ($discount / 100));
                
                // Calcula el subtotal teniendo en cuenta el descuento
                $subtotal = ($productPrice - ($productPrice * ($discount / 100))) * $quantity;

                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $id;
                $orderDetail->product_id = $cartItem->product->id;
                $orderDetail->product_price = $productPriceDiscount;
                $orderDetail->quantity = $quantity;
                $orderDetail->subtotal = $subtotal;
                $orderDetail->save();

                $cartItems = $cart->cartItems()->where('product_id', $cartItem->product->id)->get();

                foreach ($cartItems as $cartItem) {
                    $cartItem->delete(); // Eliminar cada elemento del carrito
                }
            }
            response()->json(['message' => 'Orden created successfully', 'order_id' => $id], 201);
        } else {
            response()->json(['message' => 'User unauthenticated'], 401);
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'status' => 'required|string', // Asegúrate de tener la validación adecuada
            'orderId' => 'required'
        ]);

        $orderId = $request->orderId;

        // Busca la orden por su ID
        $order = Order::find($orderId);

        if (!$order) {
            return response()->json(['error' => 'Order do not found'], 404);
        }

        // Actualiza el estado de la orden
        $order->status = $request->status;
        if($order->save()){
            return response()->json(['message' => 'Order status was updated successfully']);
        } else {
            return response()->json(['error' => 'Order status could not be updated']);
        }
    }

    private function amountStock($cartItems){
        $validation = false;

        foreach ($cartItems as $cartItem){
            if($cartItem->quantity <= $cartItem->product->stock){
                $validation = true;
            } else {
                return false;
            }
        }

        return $validation;
    }
}
