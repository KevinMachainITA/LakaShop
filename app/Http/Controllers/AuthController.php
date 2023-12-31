<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function register(RegisterRequest $request){
        $data = $request->validated();

        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->shipping_address = $data['shipping_address'];
        $user->phone = $data['phone'];
        $user->password = bcrypt($data['password']);
        $user->save();

        $cart = new Cart;
        $cart->user_id = $user->id;
        $cart->save();

        return [
            'token' => $user->createToken('MyApp')->accessToken,
            'user' => $user
        ];
    }

    public function login(LoginRequest $request){
        $data = $request->validated();

        if(!Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
            return response([
                'errors' => ['The credentials are incorrect']
            ], 422);
        }

        $user = Auth::user();
        return [
            'token' => $user->createToken('MyApp')->accessToken,
            'user' => $user
        ];
    }

    public function logout(Request $request){
        $request->user()->token()->revoke();
        return response()->json(['message' => 'Logout successfully']);
    }
}
