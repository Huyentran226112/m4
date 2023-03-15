<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function tao_ss(Request $request){
        $request->session()->put('username', 'admin');
        $request->session()->put('cart', ['van','su','dia']);
    }

    public function dung_ss(Request $request){
        $username = $request->session()->get('username');
        $cart = $request->session()->get('cart');

        echo '<pre>';
        print_r($cart);
        echo '</pre>';

    }

    public function capnhat_ss(Request $request){
        // // lay ss cart ra
        $cart = $request->session()->get('cart');
        // push vao bien cart
        array_push($cart,'toan','ly','hoa');
        echo '<pre>';
        print_r($cart);
        echo '</pre>';
        // cap nhat lai ss cart
        $request->session()->put('cart',$cart);

        // Cach 2: push
        // $request->session()->push('cart','The duc');
        // $request->session()->push('cart',['Sinh Hoc','Hoa Hoc']);


    }

    public function xoa_ss(Request $request){
        $request->session()->forget('username');
    }
}
