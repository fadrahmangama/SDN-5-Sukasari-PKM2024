<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('Halaman.home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/about',function(){
    return view('Halaman.about', [
        'title' => 'About',
        'active' => 'about'
    ]);
});

Route::get('/login', function(){
    return view('layouts.login', [
        'title' => 'login',
        
    ]);
});

Route::get('/Posts',[PostController::class,'index']);
Route::get('/Posts/{post:slug}',[PostController::class,'show']);
Route::get('/categories/{category:slug}', function(Category $category){
    return view('Halaman.Posts',[
        'title' => "Post by category: $category->name",
        'active' => 'Category',
        'posts' => $category-> post,
        'category' => $category->name
    ]);
});

Route::get('/categories', function(){
    return view('Halaman.Posts',[
        'title' => 'Category post',
        'active' => 'Category',
        'categories' => Category::with(['post','user'])->get() //egaer-loading
    ]);
});

Route::get('authors/{user:username}',function(User $user){
    return view('Halaman.Posts',[
        'title' => "Post by Author : $user->name",
        'posts' => $user->post->load('category','user'), //lazy-eager loading
        'active' => 'Authors'
    ]);
});