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

Route::get('/create', function(){
    echo 'Trang them moi';
    $params = [
        'name' => 'nguyen van a',
        'age'=>18
    ];

    // goi view
   return view('products.create',$params);
} );
// Xu ly them du lieu
Route::post('/store',function( Request $request ){
    // Lay du lieu thong thuong
    echo '<pre>';
    print_r( $_REQUEST );
    echo '</pre>';
    echo $_REQUEST['username'];

    // Lay du lieu thong qua doi tuong $request
    // use Illuminate\Http\Request;
    echo '<pre>';
    print_r( $request->all() );
    echo '</pre>';
    echo $request->username;
// goi model xu ly
//chuyen huong 
});


