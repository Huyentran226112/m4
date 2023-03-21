<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast;

class CategoryController extends Controller
{
    public function index(){
        $items = Category::paginate(2);
        return view('home',compact('items'));
    }
    public function detail($id){
       $blogshow = Blog::findOrFail($id);
       $param = [
        'blogshow' => $blogshow,
       ];
       return view('blog-layout.detail',$param);
    }
}
