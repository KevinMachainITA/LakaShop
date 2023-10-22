<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/token', [UserController::class, 'token']);

//Routes for categories
Route::get('/category-index' ,[CategoryController::class, 'index']);
Route::post('/category-store' ,[CategoryController::class, 'store']);


//Routes for products
Route::get('/product-index' ,[ProductController::class, 'index']);
Route::post('/product-store' ,[ProductController::class, 'store']);
Route::post('/product-show' ,[ProductController::class, 'show']);