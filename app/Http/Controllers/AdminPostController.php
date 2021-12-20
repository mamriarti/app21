<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index(){
        return view('admin.posts.index',[
            'posts' =>
                Post::paginate(50)
        ]);

    }


    public function create()
    {

        return view('admin.posts.create');
    }
    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required|min:3|max:300',
            'thumbnail' => 'required|image',
            'alt' => 'required|min:3|max:300',
            'slug' => ['required', 'min:3', 'max:300', Rule::unique('posts', 'slug')],
            'excerpt' => 'required|min:3|max:300',
            'body' => 'required|min:3|max:800',
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnail');
        Post::create($attributes);
        return redirect('/');
    }

    public function edit(Post $post){

        return view('admin.posts.edit', ['post' => $post ]);
    }
}
