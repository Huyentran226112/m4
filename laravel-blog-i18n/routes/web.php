<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LanguageController;
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
Route::group(['middleware' => 'locale'], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
// Hiển thị danh sách bài viết
    Route::get('/posts', [PostController::class, 'index'])->name('posts.list');

// Hiển thị giao diện thêm mới bài viết
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// Tạo mới bài viết
    Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');

// Chuyển đổi ngôn ngữ cho website
    Route::get('change-language/{language}', [LanguageController::class, 'changeLanguage'])->name('user.change-language');
});