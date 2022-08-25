<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //
    public function store(Request $request)
    {
        // dd($request->all());
        $comment = $request->body;
        $post_id = $request->post_id;
        $user_id = Auth::id();

        $newComment = new Comment();
        $newComment->comment = $comment;
        $newComment->post_id = $post_id;
        $newComment->user_id = $user_id;
        $newComment->save();


        if($newComment->save()){
            return redirect('/dashboard');
        }else{
            return "error";
        }
    }
}
