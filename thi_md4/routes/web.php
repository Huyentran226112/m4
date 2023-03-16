<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DanhsachController;
use App\Http\Controllers\CategoriesController;

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

Route::resource('book',DanhsachController::class);
Route::resource('category',CategoriesController::class);
