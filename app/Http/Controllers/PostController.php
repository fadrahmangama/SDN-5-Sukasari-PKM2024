<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class PostController extends Controller
{
    //
    public function index(){

        return view('Halaman.Posts', [
            'title' => 'All Posts',
            'active' => 'Posts',
            'posts' => Post::latest()->Filter(request(['search']))->get()   //Filter merupakan scope di model
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
