<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function __invoke(Comment $comment){
     
        //dd(auth()->user()->comments);
        //$comment = auth()->user()->comments;
        
        return view('personal.comment.edit', compact('comment'));
    }
}