<?php

use App\Http\Controllers\ProductController;
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

Route::get('/hihi', [ProductController::class, 'index'])->name('product.index');


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
Route::group([
   'prefix'=>'products'
],function(){
    Route::get('index',function(){
        return view('products.index');
    })->name('products.index');
    // create=>store
    Route::get('create',function(){
        return view('products.create');
    })->name('products.create');
    // product/show1
    // product/show2
    // product/show5
    Route::get('show/{id}',function($id){
        echo 'ban dang xem chi tiet:'.$id;
        return view('products.show');
    })->name('products.show');
    // edit=>update
    Route::get('edit/{id}',function($id){
        echo 'ban dang chinh sua id:'.$id;
        return view('products.edit');
    })->name('products.edit');

    Route::post('store',function(Request $Request){

    })->name('products.store');
    Route::put('update/{id}',function($id,Request $Request){
        echo 'ban dang xem chi tiet:'.$id;

    })->name('products.update');

    Route::delete('destroy/{id}',function($id){
        echo 'ban dang xem chi tiet:'.$id;
    })->name('products.destroy');
});
// Route::get('index',function(){
//     return view('products.index');
// })->name('products.index');
// // create=>store
// Route::get('products/create',function(){
//     return view('products.create');
// })->name('products.create');
// // product/show1
// // product/show2
// // product/show5
// Route::get('products/show/{id}',function($id){
//     echo 'ban dang xem chi tiet:'.$id;
//     return view('products.show');
// })->name('products.show');
// // edit=>update
// Route::get('products/edit/{id}',function($id){
//     echo 'ban dang chinh sua id:'.$id;
//     return view('products.edit');
// })->name('products.edit');

// Route::post('products/store',function(Request $Request){

// })->name('products.store');
// Route::put('products/update/{id}',function($id,Request $Request){
//     echo 'ban dang xem chi tiet:'.$id;

// })->name('products.update');

// Route::delete('products/destroy/{id}',function($id){
//     echo 'ban dang xem chi tiet:'.$id;
// })->name('products.destroy');



