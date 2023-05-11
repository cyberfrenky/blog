<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show() {
        return view('posts',[
            'posts' => Post::latest()->filter(request(['tag']))->get()
        ]);
    }

    public function find($id) {
        return view('post',[
            'post' => Post::find($id)
        ]);
    }
}
