<?php

namespace App\Http\Controllers\Category\Post;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke(Category $category){
      
        //dd($category->posts);
        $posts = $category->posts;

         return view('category.post.index', compact('posts'));
    }
}