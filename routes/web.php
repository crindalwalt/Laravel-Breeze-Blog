<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/posts', function () {
    return view('allPosts',[
        'title'=> 'Browse all of our posts',
        'posts'=> Post::all()
    ]);
})->middleware(['auth'])->name('allPosts');

Route::get('/post/{slug:slug}', function (Post $slug) {

    return view('single-post',[
        'post'=> $slug
    ]);
})->middleware(['auth'])->name('singlePost');



Route::get('/category/{category:slug}', function (Category $category) {

    return view('allPosts',[
        'title'=>'Post related to Category',
        'posts'=> $category->posts
    ]);
})->middleware(['auth'])->name('postCategory');

require __DIR__.'/auth.php';
