<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index(){
        return view('Halaman.Posts', [
            'title' => 'Posts',
            'active' => 'Posts',
            'posts' => Post::all()
        ]);
    }

    public function show(Post $post){
        return view('Halaman.Post', [
            'title' => 'Single Post',
            'post' => $post,
            'active' => 'Post'
        ]);
    }
}
