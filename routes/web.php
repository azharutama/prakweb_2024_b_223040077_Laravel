<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home',  ['title' => 'Home page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'azhar utama', 'title' => 'About page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog page', 'posts' => Post::all()]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact page']);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    // $post = Post::find($slug);
    return view('post', ['title' => 'Single post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {

    // $post = Post::find($slug);
    return view('posts', ['title' => count($user->posts) . ' Article by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {

    // $post = Post::find($slug);
    return view('posts', ['title' =>  ' Article in Category : ' . $category->name, 'posts' => $category->posts]);
});
