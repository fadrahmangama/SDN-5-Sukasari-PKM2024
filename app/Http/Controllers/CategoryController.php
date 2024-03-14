<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function categories(){
        return view('Halaman.Posts',[
            'title' => 'Category post',
            'active' => 'Category',
            'categories' => Category::with(['post','user'])->get() //egaer-loading
        ]);
    }

    public function category(Category $category){
        return view('Halaman.Posts',[
            'title' => "Post by category: $category->name",
            'active' => 'Category',
            'posts' => $category-> post,
            'category' => $category->name
        ]);
    }
}
