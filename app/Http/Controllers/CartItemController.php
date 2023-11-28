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
            $cartItems = $cart->cartItems; // We access the cartItems relationship of the cart.
            $products = [];
            $quantities = [];
        
            foreach ($cartItems as $cartItem) {
                $products[] = $cartItem->product; // We add the related product to the array of products.
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

    public function update(Request $request){
        $cart = $request->cart_id;
        $product = $request->product_id;
        $quantity = $request->quantity;

        // Search for the record in the cart_items table.
        $cartItem = CartItem::where('cart_id', $cart)
                            ->where('product_id', $product)
                            ->first();

        if ($cartItem) {
            // If the record is found, update the quantity.
            $cartItem->quantity = $quantity;
            $cartItem->save();
            
            return response()->json(['message' => 'Update product in the cart'], 200);
        } else {
            // If the record was not found, you can handle it in a way you deem appropriate, for instance, displaying an error message.
            return response()->json(['message' => 'Error to update product in the cart'], 404);
        }
    }

    public function destroy(Request $request){
        $productId = $request->input('product_id'); // Let's assume you receive the ID of the product you want to delete.

        // Check if the user is authenticated.
        if (Auth::check()) {
            $user = Auth::user(); // Get the authenticated user.

            // Search for the user's cart.
            $cart = $user->carts->first();

            if ($cart) {
                // Search and delete all items in the cart that match the product ID.
                $cartItems = $cart->cartItems()->where('product_id', $productId)->get();

                foreach ($cartItems as $cartItem) {
                    $cartItem->delete(); // Delete each item from the cart.
                }

                return response()->json(['message' => 'Producto eliminado del carrito']);
            }
        } else {
            return ['error' => 'unauthenticated'];
        }
    }
}
