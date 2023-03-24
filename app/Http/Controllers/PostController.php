<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {

        // dd(request('search'));

        // $posts = Post::latest();

        // if (request('search')) {
        //     $posts->where('title', 'like', '%' . request('search') . '%')
        //         ->orWhere('body', 'like', '%' . request('search') . '%');
        // }

        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('post', [
            "title" => "All Post" . $title,
            "active" => "posts",
            // "posts" => Post::all()
            // "posts" => $posts->get()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
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
