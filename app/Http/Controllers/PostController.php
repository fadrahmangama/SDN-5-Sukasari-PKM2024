<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class PostController extends Controller
{
    //



    public function index(){
        $tambahan_title='';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $tambahan_title = ' in ' . $category->name;
        }
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $tambahan_title = ' by ' . $author->name;
        }


        return view('Halaman.Posts', [
            'title' => 'All Posts' . $tambahan_title,
            'active' => 'Posts',
            'posts' => Post::latest()->Filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()   //Filter merupakan scope di model, search dan category merupakan query
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
