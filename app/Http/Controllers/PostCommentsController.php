<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    public function store(Post $post){
        request()->validate([
            'body'=> 'required'
        ]);

        $post->comments()->create([
            'user_id' => auth()->id(),
            'body' => request('body'),
        ]);
        return back();
    }

}
