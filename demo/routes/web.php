<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});
Route::get('/demo', function () {
    return view('demo');
});
Route::post('/demo', function(Illuminate\Http\Request $Request ){
      $productDescription = $Request->input('product_description');
      $discountPrice = $Request->input('discountPrice');
      $DiscountPercent = $Request->input('discount_percent');
      $discountAmount = $discountPrice * $DiscountPercent *0.1;
      return view('baitap', compact([ 'discountAmount','DiscountPercent' ,'productDescription']));
});


