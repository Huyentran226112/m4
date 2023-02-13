<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//hiện thi form từ điển 
Route::get('/tudien', function () {
    return view('welcome');
});
Route::post('/tudien', function (Request $request) {
    $tudien = $request->input('tudien');
    $tudien = [
        "hello" => "xin chào",
        "love"  => "yêu",
        "book"  => "quyển sách",
        "dog"   => "con chó",
        "cat"   => "con mèo",
        "school"=> "trường học",
        "huyen"=> "mat"
    ];
    $searchWord = $_POST["tudien"];
        $flag = 0;
        foreach ($tudien as $key => $value) {
            if ($key == $searchWord) {
                echo  $value;
                echo "<br/>";
                $flag = 1;
                break;
            }
            else if($searchWord == $value){
                echo  $key;
                $flag = 1;
                break;

            }
        }
        if ($flag == 0) {
            echo "Không tìm thấy từ cần tra.";
        }
   
    });