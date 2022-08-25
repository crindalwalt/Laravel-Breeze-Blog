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
            'posts' => Post::with(['category', 'user'])->latest()->get(),
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
        // // dd($request->all());
        // $title = $request->title;
        // $excerpt = $request->excerpt;
        // $category_id = $request->category;
        // $user_id = $request->user_id;
        // $posteditor  = $request->posteditor;
        // // dd($title,$excerpt,$category_id,$user_id,$posteditor);
        // // dd($posteditor);

        // $newPost = new Post;
        // $newPost->title = $title;
        // $newPost->excerpt = $excerpt;
        // $newPost->slug = strtolower(str_replace(" ", "_", $title));
        // $newPost->description = $posteditor;
        // $newPost->user_id = $user_id;
        // $newPost->category_id = $category_id;
        // $newPost->save();
        // redirect('/posts');


        $this->validate($request, [
            'title' => 'required',  
            'excerpt' => ['required','string'],  
            'category_id'=>['integer'],
            'posteditor' => 'required'
       ]);

   
      $posteditor = $request->posteditor;

      $dom = new \DomDocument();

      $dom->loadHtml($posteditor, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    

      $images = $dom->getElementsByTagName('img');

      foreach($images as $k => $img){


          $data = $img->getAttribute('src');

          list($type, $data) = explode(';', $data);

          list(, $data)      = explode(',', $data);

          $data = base64_decode($data);

          $image_name= "/upload/" . time().$k.'.png';

          $path = public_path() . $image_name;

          file_put_contents($path, $data);

          $img->removeAttribute('src');

          $img->setAttribute('src', $image_name);

       }


      $posteditor = $dom->saveHTML();

      $summernote = new Post;

      $summernote->title = $request->title;
      $summernote->excerpt = $request->excerpt;
      $summernote->category_id = $request->category;
      $summernote->slug = "my-php-programming";
      $summernote->user_id = Auth::id();
      $summernote->description = $posteditor;

      $summernote->save();
      if($summernote->save()){
        echo "data saved successfully";
      }else{
        echo "some error";
      }



  

  
    }
}
