<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(User $user)
    {
        return view('userProfile',[
            'title' => 'Browse Post from your favourite User',
            'user'=> $user,
           
        ]);
    }
}

