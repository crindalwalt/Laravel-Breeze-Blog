<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    //
    public function store(Request $request)
    {
        // dd($request->all());
        $title = $request->title;
        $excerpt = $request->excerpt;
        $category_id = $request->category;
        $user_id = $request->user_id;
        $posteditor  = $request->posteditor;
        // dd($title,$excerpt,$category_id,$user_id,$posteditor);
        // dd($posteditor);

        $newPost = new Post;
        $newPost->title = $title;
        $newPost->excerpt = $excerpt;
        $newPost->slug = strtolower(str_replace(" ","_",$title));
        $newPost->description = $posteditor;
        $newPost->author_id = $user_id;
        $newPost->category_id = $category_id;
        $newPost->save();
        redirect('/posts');
        }
    
}
