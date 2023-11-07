<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartItemController extends Controller
{
    public function index(){
        $user = Auth::user(); 
        $cart = $user->carts->first(); 

        if ($cart) {
            $cartItems = $cart->cartItems; // Accedemos a la relación cartItems del carrito.
            $products = [];
            $quantities = [];
        
            foreach ($cartItems as $cartItem) {
                $products[] = $cartItem->product; // Agregamos el producto relacionado al array de productos.
                $quantities[] = $cartItem->quantity;
            }
        
            return [$products, $quantities];
        } else {
            return [];
        }
    }

    public function store(Request $request){
        $cartItem = new CartItem();
        $cartItem->cart_id = $request->cart_id;
        $cartItem->product_id = $request->product_id;
        $cartItem->quantity = $request->quantity;

        if($cartItem->save()){
            return ['message' => 'Added successfuly'];
        } else {
            return ['error' => 'Error to add item in the cart'];
        }
    }

    public function destroy(Request $request){
        $productId = $request->input('product_id'); // Supongamos que recibes la ID del producto que deseas eliminar.

        // Verificar si el usuario está autenticado
        if (Auth::check()) {
            $user = Auth::user(); // Obtener el usuario autenticado

            // Buscar el carrito del usuario
            $cart = $user->carts->first();

            if ($cart) {
                // Buscar y eliminar todos los elementos del carrito que coincidan con la ID del producto
                $cartItems = $cart->cartItems()->where('product_id', $productId)->get();

                foreach ($cartItems as $cartItem) {
                    $cartItem->delete(); // Eliminar cada elemento del carrito
                }

                return response()->json(['message' => 'Producto eliminado del carrito']);
            }
        } else {
            return ['error' => 'unauthenticated'];
        }
    }
}
