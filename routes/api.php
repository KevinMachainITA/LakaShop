<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\CategoryController;

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
    Route::post('/user-update', [UserController::class, 'update']);
    Route::post('/users-search', [UserController::class, 'searchByName']);

    Route::post('/logout',[AuthController::class, 'logout']);
    
    //Routes to cart
    Route::get('/cart-index', [CartController::class, 'index']);

    //Routes to products
    Route::post('/products-store', [ProductController::class, 'store']);
    Route::post('/products-search', [ProductController::class, 'searchByName']);
    Route::post('/products-update', [ProductController::class, 'update']);

    //Routes to cart-items
    Route::get('/items-index', [CartItemController::class, 'index']);
    Route::post('/items-store', [CartItemController::class, 'store']);
    Route::post('/items-update', [CartItemController::class, 'update']);
    Route::post('/items-destroy', [CartItemController::class, 'destroy']);

    //Routes to orders
    Route::get('/order-index', [OrderController::class, 'index']);
    Route::post('/order-store', [OrderController::class, 'store']);
    Route::post('/order-search', [OrderController::class, 'searchByName']);
    Route::post('/order-update', [OrderController::class, 'update']);
    Route::get('/order-show', [OrderController::class, 'show']);
});

Route::apiResource('/categories', CategoryController::class);
Route::apiResource('/products', ProductController::class);

//Authentication
Route::post('/register',[AuthController::class, 'register']);
Route::post('/login',[AuthController::class, 'login']);
Route::post('/test',[AuthController::class, 'test']);