<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        return view('blog', [
            "name" => "M Reza Khalafi",
            "email" => "mrezakhalafi@yahoo.com",
            "title" => "Blog",
            "posts" => Post::all()
        ]);
    }

    public function detail(Post $post)
    {

        return view('posts', [
            "title" => "Single Post",
            // "posts" => Post::find($id)
            "posts" => $post
        ]);
    }
}
