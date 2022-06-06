<?php

namespace App\Http\Controllers\Admin\Post;


use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Http\Controllers\Admin\Post\BaceController;

class UpdateController extends BaceController
{
    public function __invoke(UpdateRequest $request, Post $post){
        
        $data = $request->validated();
        
       $post = $this->service->update($data, $post);

        return view('admin.post.show', compact('post'));
    }
}