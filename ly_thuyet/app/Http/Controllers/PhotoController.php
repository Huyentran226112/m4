<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        $params = [
            'id' => 1,
            'name'=>'huyen',
            'age'=>20
        ];
        // extract($params);
        $id = 1;
        $name = 'huyen';
        $age =20;


        return view('admin.photos.index')
        ->with('id', $id)
        ->with('name', $name)
        ->with('age',$age)
        ->with('params',$params)
        ;
        // return view('photos.index', compact('id', 'name', 'age'));
        // return view('photos.index')->with('id', 'name', 'age);

    }
    public function show($id)
    {
        $params = [
            'id' => $id,
            'name'=>'huyen',
            'age'=>20
        ];
        return view('admin.photos.show', $params);
    }
    public function create()
    {
        return view('admin.photos.create');
    }
    public function store(Request $request)
    {

        dd($request->all());
    }
    public function edit($id)
    {
        $params = [
            'id' => $id
        ];
        return view('admin.photos.edit', $params);
    }
    public function update($id, Request $request)
    {
        // dd($request->all());
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        die();
        // Validate
        // Goi model xu ly
        // Chuyen huong

    }
    public function destroy($id)
    {
    }
}
