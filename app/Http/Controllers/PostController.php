<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        return view('post', [
            "title" => "All Post",
            // "posts" => Post::all()
            "posts" => Post::with(['author', 'category'])->latest()->get()
        ]);
    }

    public function detail(Post $post)
    {

        return view('posts', [
            "title" => "Single Post",
            // "posts" => Post::find($id)
            "post" => $post
        ]);
    }
}
