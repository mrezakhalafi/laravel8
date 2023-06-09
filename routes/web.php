<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
// use App\Models\Post;
// use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
        "active" => "home",
        "email" => "mrezakhalafi@yahoo.com",
        "title" => "Home"
    ]);
});

Route::get('/about', function () {

    return view('about', [
        "name" => "M Reza Khalafi",
        "active" => "about",
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
        "active" => "category",
        "categories" => Category::all()
    ]);
});

// Route::get('/categories/{category:slug}', function (Category $category) {

//     return view('post', [
//         "title" => "Post by Category : " . $category->name,
//         "active" => "category",
//         "posts" => $category->posts->load('category', 'author')
//     ]);
// });


// Route::get('/authors/{author:username}', function (User $author) {

//     // echo($author);

//     return view('post', [
//         "title" => "Post By Author : " . $author->name,
//         "active" => "author",
//         "posts" => $author->post->load('category', 'author')
//     ]);
// });


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show');
