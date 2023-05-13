<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Author;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        "blogs" => Blog::all(),
        "categories" => Category::all()
    ]);
});

Route::get('/category/{category}/{blog:slug}', function ($category, Blog $blog) {
    return view('blog', [
        "blog" => $blog,
        "categories" => Category::all(),
        "author_blogs" => Author::find($blog->author_id)->blogs->where('id', '!=', $blog->id)->random(2)
    ]);
});

Route::get('/category/{category:slug}', function (Category $category) {
    return view('category', [
        "blogs" => $category->blogs,
        "categories" => Category::all()
    ]);
});

Route::get('/author/{author:name}', function (Author $author) {
    return view('author', [
        "author" => $author,
        "author_blogs" => $author->blogs,
        "categories" => Category::all()

    ]);
});