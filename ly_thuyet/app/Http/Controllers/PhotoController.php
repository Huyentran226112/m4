<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(){
        return view('photos.index');
    }
    public function show($id){
        $params = [
            'id' => $id
        ];
        return view('photos.show',$params);
    }
    public function create(){
        return view('photos.create');
    }
    public function store(Request $request){
        dd($request->all());
    }
    public function edit($id){
        $params = [
            'id' => $id
        ];
        return view('photos.edit',$params);
    }
    public function update($id, Request $request){
        // dd($request->all());
            echo '<pre>';
             print_r($request->all());
            echo '</pre>';
            die();
        // Validate
        // Goi model xu ly
        // Chuyen huong

    }
    public function destroy($id){

    }


}

