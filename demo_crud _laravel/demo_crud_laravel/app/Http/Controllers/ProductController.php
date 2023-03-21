<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $param = [
            'products' => $products
            // 'categories'=>$categories
        ];

        return view('products.index', $param);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'create new product';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'add product';
    }

    /**
     * Display the specified resource.
     */
    public function show($id = 1)
    {
        return 'show product' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'edit product';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'update product';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'delete product';
    }
}
