<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MaytinhController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('maytinh.index');
    }


    public function hienthi(Request $request)
    {
        $sothunhat = $request->sothunhat;
        $sothuhai = $request->sothuhai;
        $pheptinh = $request->pheptinh;

        if($sothunhat!="" && $sothuhai!= ""){
            switch ($pheptinh) {
                case '+':
                    $ketqua = $sothunhat + $sothuhai;
                    echo "Kết quả :".$ketqua ;
                    break;
                case '-':
                    $ketqua = $sothunhat - $sothuhai;
                    echo"Kết quả : ". $ketqua ;
                    break;
                case '*':
                    $ketqua = $sothunhat * $sothuhai;
                    echo"Kết quả : ". $ketqua ;
                    break;
                case '/':
                    if($sothuhai == 0){
                        echo 'lỗi';
                    }else{
                        $ketqua = $sothunhat / $sothuhai;
                        echo "Kết quả : ". $ketqua ;
                    }
                    break;
            }
        }else{
            echo 'vui lòng nhập số ';
        }

        return view('maytinh.index');
    }

}
