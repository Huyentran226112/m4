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

Route::get('login', [\App\Http\Controllers\LoginController::class, 'showFormLogin'])->name('auth.showFormLogin');
Route::post('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('auth.login');
Route::get('home', function () {

    return view('welcome');

 })->name('home.index');
