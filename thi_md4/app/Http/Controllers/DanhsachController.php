<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Danhsach;
use App\Models\Category;

class DanhsachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $danhsachs  = Danhsach::with('category')->paginate(3);
        if ($key = request()->key) {
            $danhsachs  = Danhsach::with('category')->where('name', 'like', '%' . $key . '%')->paginate(3);
        }
        return view('books.index', compact('danhsachs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Categories = Category::get();
        return view('books.create',compact('Categories'));
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $danhsach = new Danhsach();
        $danhsach->name = $request->name;
        $danhsach->isbn = $request->isbn;
        $danhsach->author = $request->author;
        $danhsach->category_id  = $request->category_id ;
        $danhsach->pages = $request->pages;
        $danhsach->publication_year = $request->publication_year;
        $danhsach->save();
        return redirect()->route('book.index');
      
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
        $Categories = Category::all();
        $danhsach = Danhsach::find($id);
        $params = [
            'Categories' => $Categories,
            'danhsach' => $danhsach,
        ];
        return view('books.edit',$params);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        // dd($request);
        $danhsach = Danhsach::find($id);
        $danhsach->name = $request->name;
        $danhsach->isbn = $request->isbn;
        $danhsach->author = $request->author;
        $danhsach->category_id = $request->category_id;
        $danhsach->pages = $request->pages;
        $danhsach->publication_year = $request->publication_year;
        $danhsach->save();
        return redirect()->route('book.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories = Danhsach::find($id);
        $categories->delete();
        return redirect()->route('book.index');
    }
}
