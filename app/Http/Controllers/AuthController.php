<?php

namespace App\Http\Controllers;

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
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->email = $data['email'];
        $user->shipping_address = $data['shipping_address'];
        $user->password = bcrypt($data['password']);
        $user->save();

        return [
            'token' => $user->createToken('token')->plainTextToken,
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
    }

    public function logout(){

    }
}
