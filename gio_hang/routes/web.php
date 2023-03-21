<?php

use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[ShopController::class,'index'])->name('shop.index');



Route::get('/carts',[ShopController::class,'getCart'])->name('shop.getCart');



Route::get('/{idProduct}/add-to-cart', [ShopController::class,'addToCart'])->name('add-to-cart');

Route::get('/remove-cart/{id}', [ShopController::class, 'removeCart'])->name('shop.remove11');
