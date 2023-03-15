<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CustomerController;
use App\Models\User;
use App\Models\Phone;
use App\Models\Comment;
use App\Models\Post;
use App\Models\RoleUser;
use App\Models\Role;
use App\Http\Controllers\EloquenNangCaoController;
use App\Http\Controllers\ValidatorController;
use App\Http\Controllers\ExeptionController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\App;

Route::get('user_info',function(){
    $user = \App\Models\User::find(1);
    dd($user->group->roles);
});
Route::resource('users',\App\Http\Controllers\UserController::class);

Route::get('/', function () {
    return view('welcome');
});
// //URI: huyen
// //URI: dang-ky
// //URL: tenwebsite.com/dang-ky
// // Hien thi trang xxx
// Route::get('/create', function(){
//     echo 'Trang them moi';
//     $name = 'NVA';
//     $age = 18;
//     return view('products.create', compact(['name','age'])  );
//     // Truyen du lieu xuong view
//     // $params = [
//     //     'name' => $name,
//     //     'age'  => $age
//     // ];
//     // // Goi view
//     // return view('products.create',$params);
// } );
// // Xu ly them du lieu
// Route::post('/store',function( Request $request ){
//     // Lay du lieu thong thuong
//     echo '<pre>';
//     print_r( $_REQUEST );
//     echo '</pre>';
//     echo $_REQUEST['username'];
//     // Lay du lieu thong qua doi tuong $request
//     // use Illuminate\Http\Request;
//     echo '<pre>';
//     print_r( $request->all() );
//     echo '</pre>';
//     echo $request->username;
//     die();
//     // Goi model xy ly
//     // Chuyen huong
// });
// /*
// $args = [
//     'prefix' => 'products'
// ];
// Route::group($args,function(){
// });
// */
// Route::group([
//     'prefix' => 'orders'
// ],function(){
//     Route::get('index/{name?}', function ($name = ''){//products/products/index
//         return view('products.index');
//     });
// });
// //orders/index
// //products/index
// Route::group([
//     'prefix' => 'products'
// ],function(){
//     Route::get('index/{name?}', function ($name = ''){//products/products/index
//         return view('products.index');
//     });
//     Route::get('create', function (){
//         function route($route_name){
//             return 'http://127.0.0.1:8000/xxx';
//         }
//         echo route('thanh-cong');//
//         // return view('products.create');
//     });
//     Route::get('show/{id}', function($id){
//         echo 'Ban dang chinh sua id:' .$id;
//         return view('products.show');
//     });


//     Route::get('edit/{id}', function ($id){
//         echo 'Ban dang chinh sua id:' .$id;
//         return view('products.edit');
//     });
// });
// //Tien to: products
// Route::post('products/store',function(Request $request ){
// });
// Route::put('products/update/{id}',function(Request $request, $id ){
//     echo 'Ban dang chinh sua id:' .$id;
// });
// Route::delete('products/destroy/{id}', function ($id){
//     echo 'Ban dang chinh sua id:' .$id;
// });
// Route::get('lien-he-codegym',function(){
//     return view('form-lien-he');
// });
// Route::get('lien-he-thanh-cong123',function(){
//     return view('lien-he-thanh-cong');
// })->name('thanh-cong');
// Route::post('xu-ly-lien-he-codegym',function(Request $request){
//     // Xac thuc du lieu
//     // Luu vao CSDL
//     // Chuyen huong
//     return redirect()->route('thanh-cong');//http://127.0.0.1:8000/lien-he-thanh-cong123
//     return redirect('lien-he-thanh-cong123');//http://127.0.0.1:8000/lien-he-thanh-cong123
// });
// Route::get('login',function(){
//     // Hien thi form
// });
// Route::post('login',function(Request $request){
//     //Nhan du lieu
//     // todo
//     // $_REQUEST;
// });

// // Photo
// // Route::group([
// //     'prefix' => 'photos'
// // ],function(){
// //     Route::get('index',[PhotoController::class,'index'])->name('photos.index');
// //     Route::get('show/{id}',[PhotoController::class,'show'])->name('photos.show');
// //     Route::get('create',[PhotoController::class,'create'])->name('photos.create');
// //     Route::get('edit/{id}',[PhotoController::class,'edit'])->name('photos.edit');
// //     Route::put('update/{id}',[PhotoController::class,'update'])->name('photos.update');
// //     Route::delete('destroy/{id}',[PhotoController::class,'destroy'])->name('photos.destroy');
// //     Route::post('store',[PhotoController::class,'store'])->name('photos.store');
// // });

Route::resource('photos',PhotoController::class);
// Route::post('photos/store',[PhotoController::class,'store'])->name('photos.store');


// //use App\Http\Controllers\CustomerController;
// Route::resource('customers',CustomerController::class);
// // tao route admin +middware:auth
// // echo trang admin

// Route::get('admin', function (){
//     echo 'trang admin';

// })->middleware('auth');
// // tao route login ->name:login
// // echo trang admin
// Route::get('login', function (){
//     echo 'trang login';

// })->name('login');
// // uong bia
// Route ::get('uong-bia/{age}', [PhotoController::class,'index'])->middleware(['checkage','affter_middleware']);
// // uong nuoc ngotc
// Route ::get('uong-nuoc-ngot', function(){
//     echo('ban duoc uong nươc ngot');
// })->name('uong-nuoc-ngot');


// Route::group([
//     'prefix' => 'admin',
//     'middleware' => 'auth'
// ],function(){
// Route::resource('/products',ProductController::class);
// Route::resource('/categories',CategoryController::class);
// Route::resource('/orders',OrderController::class);
// Route::resource('/users',UserController::class);
// });
// Route::group([
//     'prefix' => 'user'
// ],function(){
 Route::get('/login',[UserController::class,'login']);
//  Route::post('/postLogin',[UserController::class,'postLogin']);
 Route::get('/register',[UserController::class,'register']);
//  Route::post('/postRegister',[UserController::class,'postRegister']);
//  Route::get('/logout',[UserController::class,'logout']);
// });
// Route::get('admin/test',function(){
//     return view('admin.layouts.master');
// });
// // route::get('test-db',function(){
// //     $tiem = Category:: find(2);
// //     dd($tiem);
// // });
// Route::get('hasOne',function(){
//     // tim user co id = 1 z
//     $item= User::find(1);
//     dd($item->roles);

//     // chi load mqh phone
//     // $item= User::with('phone')->find(1);
//     // dd($item->toArray());
// });
// Route::get('saveHasMany',function(){
//     // post
//     $post = new Post();
//     $post->title ='bai viet moi';
//     $post->user_id= 1;
//     $post->save();


//     $comments =[
//         [
//             'content'=>'dep qua',
//             'user_id'=> 1
//         ],
//         [
//             'content'=>'hay qua',
//             'user_id'=> 1
//         ],
//     ];

//     foreach( $comments as $comment ){
//         $objComment = new Comment();
//         $objComment->content =$comment['content'];
//         $objComment->user_id =$comment['user_id'];
//         $objComment->post_id =$post->id;
//         $objComment->save();
//     }



// });
//     // $user = new User();
//     // $user->name = 'Quan ly';
//     // $user->password = '12345';
//     // $user->imager = 'imager';
//     // $user->email = 'quanlyq@gmail.com';
//     // $user->birthday='2023-02-23';
//     // $user->save();



//     // // $iem->id
//     // $phone = new phone();
//     // $phone->phone='123456789';
//     // $phone->user_id = $user->id;
//     // $phone->save();
// Route::get('belongsToMany',function(){
//     $array_roles =[
//         [
//             'name'=>'bao ve sang'
//         ],
//         [
//             'name'=>'bao ve chieu'
//         ]
//         ];
//         // tao user3

//         $user = new User();
//     $user->name = 'bac bao ve';
//     $user->password = '12345';
//     $user->imager = 'imager';
//     $user->email = 'quanlyq@gmail.com';
//     $user->birthday='2023-02-23';
//     $user->save();
//     // tao role
//     foreach( $array_roles as $array_role ){
//             $role = new Role();
//             $role->name = $array_role['name'];
//             $role->save();
//             // set quyen
//         $role_user = new RoleUser();
//         $role_user->user_id =$user->id;
//         $role_user->role_id =$role->id;
//         $role_user->save();
//     }
// });

Route::get('HasOne',[EloquenNangCaoController::class,'HasOne']);
Route::get('saveHasOne',[EloquenNangCaoController::class,'saveHasOne']);
Route::get('saveHasMany',[EloquenNangCaoController::class,'saveHasMany']);
Route::get('saveBelongsToMany',[EloquenNangCaoController::class,'saveBelongsToMany']);

Route::get('ModelNotFoundException/{id}',[ExeptionController::class,'fun_ModelNotFoundException']);
Route::get('UserNotFoundException',[ExeptionController::class,'fun_UserNotFoundException']);
Route::get('validator/create',[ValidatorController::class,'create'])->name('validator.create');
Route::post('validator/store',[ValidatorController::class,'store'])->name('validator.store');


Route::get('tao_ss',[SessionController::class,'tao_ss']);
Route::get('dung_ss',[SessionController::class,'dung_ss']);
Route::get('capnhat',[SessionController::class,'capnhat_ss']);
Route::get('xoa_ss',[SessionController::class,'xoa_ss']);
Route::get('them_vao_gio/{id_sp}/{sl}',[\App\Http\Controllers\CartController::class,'them_vao_gio']);
Route::get('xoa_gio_hang/{id_sp}',[\App\Http\Controllers\CartController::class,'xoa_gio_hang']);
Route::get('xem_gio_hang/',[\App\Http\Controllers\CartController::class,'xem_gio_hang']);
Route::get('/{locale?}', function ($locale = null) {
    App::setLocale($locale);
    return view('welcome');
})->name('welcome');
