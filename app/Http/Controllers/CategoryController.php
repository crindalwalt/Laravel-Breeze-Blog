<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    

    public function index(Category $category)
    {
        return view('allPosts',[
            'title'=>'Post related to Category',
            'posts'=> $category->posts,
        ]);
    }
}
