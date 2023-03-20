<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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

Route::get('/blog', [PostController::class, 'index']);

// Route::get('/posts/{slug}', [PostController::class, 'show']);
Route::get('/posts/{post:slug}', [PostController::class, 'detail']);
