<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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


// ? Dashboard
Route::get('/',function(){  return redirect('/dashboard');   });
Route::get('/dashboard',[PostController::class,'dashboard'])->name('dashboard');

// ? Posts
Route::get('/posts',[PostController::class,'index'])->name('allPosts');
Route::get('/post/{slug:slug}',[PostController::class,'show'])->name('singlePost');
Route::get('/add',[PostController::class,'create'])->name('createPost');
Route::post('/add',[PostController::class,'store'])->name('storePost');

// ? Relation with category and User
Route::get('/user/{user}',[UserController::class,'index'])->name('userPost'); 
Route::get('/category/{category:slug}',[CategoryController::class,'index'])->name('postCategory');


require __DIR__.'/auth.php';
