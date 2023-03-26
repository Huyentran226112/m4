<?php

use App\Http\Controllers\CategoryController;
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





Route::get('/categories',[CategoryController::class,'index'])->name('index');
Route::get('/ok',[CategoryController::class,'index'])->name('home');
Route::get('/categories/{id}',[CategoryController::class,'show'])->name('show');
Route::get('/categories/{id}',[CategoryController::class,'detail'])->name('detail');
