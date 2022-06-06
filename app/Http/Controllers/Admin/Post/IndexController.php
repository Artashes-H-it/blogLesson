<?php

namespace App\Http\Controllers\Admin\Post;


use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Post\BaceController;

class IndexController extends BaceController
{
    public function __invoke(){
        
        $posts = Post::all();

        return view('admin.post.index', compact('posts'));
    }
}