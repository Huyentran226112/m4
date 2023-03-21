<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThoigianController extends Controller
{
    public function tao_tt(Request $request){
        $request->session()->put('time', 'date');
        $request->session()->put('cart', ['van','su','dia']);
    }
}
