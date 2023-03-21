<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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


Route::get('/login', [LoginController::class,'showLogin'])->name('show.login');
Route::post('/login', [LoginController::class,'login'])->name('user.login');
Route::get('/blog', [BlogController::class, 'showBlog'])->name('show.blog');
Route::get('/logout', [LogoutController::class, 'logout'])->name('user.logout');

