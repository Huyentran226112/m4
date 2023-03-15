<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class CartController extends Controller
    {
        public function them_vao_gio($id_sp,$sl){
            // dd($sl);
            // Lay ra mang cart
            $cart = session()->get('cart');
            // Gan chi so id_sp = $sl

            if( isset( $cart[$id_sp] ) ){
                //lay so luong cu
                $sl_cu = $cart[$id_sp];
                //cong sl cu cho gia tri moi
                $sl_moi = (int)$sl_cu + (int)$sl;
                // Gan vao mang
                $cart[$id_sp] = $sl_moi;
            }else{
                $cart[$id_sp] = $sl; //2 => 10
            }
            // Cap nhat lai cart
            session()->put('cart',$cart);
        }

        public function xoa_gio_hang($id_sp){
            // Lay ra mang cart
            $cart = session()->get('cart');
            // Xoa mang cart theo chi so
            unset( $cart[$id_sp] );
            // Cap nhat lai cart
            session()->put('cart',$cart);
        }

        public function xem_gio_hang(){

            $cart = session()->get('cart');
            $so_luong = $cart;

            $product_ids = array_keys($cart);
            // Model
            // $products = Product::whereIn('id',$product_ids);

            // Xem so luong cua san pham dua vao id sp

            echo '<pre>';
            print_r( $cart[1] );
            echo '</pre>';
        }


    }

