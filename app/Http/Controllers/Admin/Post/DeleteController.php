<?php

namespace App\Http\Controllers\Admin\Post;


use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Post\BaceController;

class DeleteController extends BaceController
{
    public function __invoke(Post $post){
      
        $post->delete();

        return redirect()->route('admin.post.index');
    }
}