<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CustomerController;
Route::get('/', function () {
    return view('welcome');
});
//URI: huyen
//URI: dang-ky
//URL: tenwebsite.com/dang-ky
// Hien thi trang xxx
Route::get('/create', function(){
    echo 'Trang them moi';
    $name = 'NVA';
    $age = 18;
    return view('products.create', compact(['name','age'])  );
    // Truyen du lieu xuong view
    // $params = [
    //     'name' => $name,
    //     'age'  => $age
    // ];
    // // Goi view
    // return view('products.create',$params);
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
    die();
    // Goi model xy ly
    // Chuyen huong
});
/*
$args = [
    'prefix' => 'products'
];
Route::group($args,function(){
});
*/
Route::group([
    'prefix' => 'orders'
],function(){
    Route::get('index/{name?}', function ($name = ''){//products/products/index
        return view('products.index');
    });
});
//orders/index
//products/index
Route::group([
    'prefix' => 'products'
],function(){
    Route::get('index/{name?}', function ($name = ''){//products/products/index
        return view('products.index');
    });
    Route::get('create', function (){
        function route($route_name){
            return 'http://127.0.0.1:8000/xxx';
        }
        echo route('thanh-cong');//
        // return view('products.create');
    });
    Route::get('show/{id}', function($id){
        echo 'Ban dang chinh sua id:' .$id;
        return view('products.show');
    });


    Route::get('edit/{id}', function ($id){
        echo 'Ban dang chinh sua id:' .$id;
        return view('products.edit');
    });
});
//Tien to: products
Route::post('products/store',function(Request $request ){
});
Route::put('products/update/{id}',function(Request $request, $id ){
    echo 'Ban dang chinh sua id:' .$id;
});
Route::delete('products/destroy/{id}', function ($id){
    echo 'Ban dang chinh sua id:' .$id;
});
Route::get('lien-he-codegym',function(){
    return view('form-lien-he');
});
Route::get('lien-he-thanh-cong123',function(){
    return view('lien-he-thanh-cong');
})->name('thanh-cong');
Route::post('xu-ly-lien-he-codegym',function(Request $request){
    // Xac thuc du lieu
    // Luu vao CSDL
    // Chuyen huong
    return redirect()->route('thanh-cong');//http://127.0.0.1:8000/lien-he-thanh-cong123
    return redirect('lien-he-thanh-cong123');//http://127.0.0.1:8000/lien-he-thanh-cong123
});
Route::get('login',function(){
    // Hien thi form
});
Route::post('login',function(Request $request){
    //Nhan du lieu
    // todo
    // $_REQUEST;
});

// Photo
// Route::group([
//     'prefix' => 'photos'
// ],function(){
//     Route::get('index',[PhotoController::class,'index'])->name('photos.index');
//     Route::get('show/{id}',[PhotoController::class,'show'])->name('photos.show');
//     Route::get('create',[PhotoController::class,'create'])->name('photos.create');
//     Route::get('edit/{id}',[PhotoController::class,'edit'])->name('photos.edit');
//     Route::put('update/{id}',[PhotoController::class,'update'])->name('photos.update');
//     Route::delete('destroy/{id}',[PhotoController::class,'destroy'])->name('photos.destroy');
//     Route::post('store',[PhotoController::class,'store'])->name('photos.store');
// });

Route::resource('photos',PhotoController::class);

//use App\Http\Controllers\CustomerController;
Route::resource('customers',CustomerController::class);
