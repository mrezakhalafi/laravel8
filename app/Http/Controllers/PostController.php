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
            "active" => "posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    public function detail(Post $post)
    {

        return view('posts', [
            "title" => "Single Post",
            "active" => "posts",
            // "posts" => Post::find($id)
            "post" => $post
        ]);
    }
}
