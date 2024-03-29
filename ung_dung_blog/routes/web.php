<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoriesController;
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

Route::get('/', function () {
    return view('includes.content');
    });
Route::get('detail', function () {
    return view('includes.detail');
})->name('detail');
Route::resource('blogs', BlogController::class);
Route::resource('categories', CategoriesController::class);



