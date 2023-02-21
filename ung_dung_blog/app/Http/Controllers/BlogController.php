<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Blogs = Blog::all();
        $param = [
            'Blogs' => $Blogs
            // 'categories'=>$categories
        ];

        return view('index', $param);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $category = new Blog();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect('blogs');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blogs = Blog::find($id);
        return view('edit',compact('blogs'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blogs = Blog::find($id);
        $blogs->name = $request->name;
        $blogs->description = $request->description;
        $blogs->save();
        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Blog::find($id)->delete();
        return redirect()->route('blogs.index');
    }
}
