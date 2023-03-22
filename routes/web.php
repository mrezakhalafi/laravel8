<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('index', [
        "name" => "M Reza Khalafi",
        "email" => "mrezakhalafi@yahoo.com",
        "title" => "Home"
    ]);
});

Route::get('/about', function () {

    return view('about', [
        "name" => "M Reza Khalafi",
        "email" => "mrezakhalafi@yahoo.com",
        "title" => "About"
    ]);
});

Route::get('/post', [PostController::class, 'index']);

// Route::get('/posts/{slug}', [PostController::class, 'show']);
Route::get('/posts/{post:slug}', [PostController::class, 'detail']);

Route::get('/categories', function () {

    return view('categories', [
        "title" => "List Category",
        "categories" => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {

    return view('post', [
        "title" => "Post by Category : " . $category->name,
        "posts" => $category->posts,
        "category" => $category->name
    ]);
});


Route::get('/authors/{author:username}', function (User $author) {

    // echo($author);

    return view('post', [
        "title" => "Post By Author : " . $author->name,
        "posts" => $author->post
    ]);
});
