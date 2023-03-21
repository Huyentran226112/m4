<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('tao_tt',[\App\Http\Controllers\ThoigianController::class,'thoigian']);
Route::get('capnhat_tt',[\App\Http\Controllers\ThoigianController::class,'thoigian']);
Route::get('xoa',[\App\Http\Controllers\ThoigianController::class,'thoigian']);


