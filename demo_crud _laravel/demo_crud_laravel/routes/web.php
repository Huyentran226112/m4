<?php

use App\Http\Controllers\ProductController;
use Illuminate\Routing\Router;
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
//bai2
// Route::get('/welcome', function () {
//     return view('welcome');
// });
// Route::get('/admin', function () {
//      return view('admin');
// });
// Route::get('/product-list', function () {
//     return view('product-list');
// });
// Route::get('/user', function () {
//     return view('user');
// });

// Route::get('/product', [ProductController::class, 'index']);
// Route::get('/product/{id?}', [ProductController::class, 'show']);

Route::resource('/product',ProductController::class);
