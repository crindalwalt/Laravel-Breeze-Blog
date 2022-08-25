<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    // ? Auth Middleware applied
    public function __construct()
    {
        $this->middleware('auth');
    }

    // ? Redirection to dashboard
    public function dashboard()
    {   
     
        return view('/dashboard',[
            'posts'=>User::find(Auth::id())->posts,
        ]);
    }

    // ? Method to show all Post at /posts
    public function index()
    {
        return view('allPosts', [
            'title' => 'Browse all of our posts',
            'posts' => Post::with(['category', 'user'])->get(),
        ]);
    }

    // ?  Method to show single posts at /post/{slug}
    public function show(Post $slug)
    {
        return view('single-post', [
            'post' => $slug
        ]);
    }

    public function create()
    {
        return view('createPost');
    }


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
        $newPost->slug = strtolower(str_replace(" ", "_", $title));
        $newPost->description = $posteditor;
        $newPost->author_id = $user_id;
        $newPost->category_id = $category_id;
        $newPost->save();
        redirect('/posts');
    }
}
