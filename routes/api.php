<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->group(function(){
    //Routes to users
    Route::get('/user', function (Request $request) {return $request->user();});
    Route::get('/users-index', [UserController::class, 'index']);

    Route::post('/logout',[AuthController::class, 'logout']);
    
    //Routes to cart
    Route::get('/cart-index', [CartController::class, 'index']);

    //Routes to cart-items
    Route::get('/items-index', [CartItemController::class, 'index']);
    Route::post('/items-store', [CartItemController::class, 'store']);
    Route::post('/items-destroy', [CartItemController::class, 'destroy']);
});

Route::apiResource('/categories', CategoryController::class);
Route::apiResource('/products', ProductController::class);

//Authentication
Route::post('/register',[AuthController::class, 'register']);
Route::post('/login',[AuthController::class, 'login']);
Route::post('/test',[AuthController::class, 'test']);