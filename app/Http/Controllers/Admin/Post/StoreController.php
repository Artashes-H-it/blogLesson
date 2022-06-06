<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Controllers\Admin\Post\BaceController;


class StoreController extends BaceController
{
    public function __invoke(StoreRequest $request){
       
        $data = $request->validated();
        
        $this->service->store($data);
      
        return redirect()->route('admin.post.index');
    }
}