<?php

use App\Http\Controllers\MaytinhController;
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

Route::prefix('maytinh')->group(function () {
    Route::get('/hien-thi', [MaytinhController::class, 'index'])->name('maytinh.hien_thi');
    Route::post('/xu-li-tinh-toan', [MaytinhController::class, 'hienthi'])->name('maytinh.xu_li');
});
