<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',  ['title' => 'Home page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'azhar utama', 'title' => 'About page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog page', 'posts' => [
        [
            'id' => 1,
            'slug' => 'Judul-Artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Azhar Utama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus debitis voluptatem, consectetur molestias ipsum quasi dignissimos culpa exercitationem quibusdam officiis, animi possimus similique, molestiae magni eaque. Quam commodi voluptatibus consequuntur?',
        ],

        [
            'id' => 2,
            'slug' => 'Judul-Artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Azhar Lutfiadi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus debitis voluptatem, consectetur molestias ipsum quasi dignissimos culpa exercitationem quibusdam officiis, animi possimus similique, molestiae magni eaque. Quam commodi voluptatibus consequuntur?',
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact page']);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'Judul-Artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Azhar Utama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus debitis voluptatem, consectetur molestias ipsum quasi dignissimos culpa exercitationem quibusdam officiis, animi possimus similique, molestiae magni eaque. Quam commodi voluptatibus consequuntur?',
        ],

        [
            'id' => 2,
            'slug' => 'Judul-Artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Azhar Lutfiadi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus debitis voluptatem, consectetur molestias ipsum quasi dignissimos culpa exercitationem quibusdam officiis, animi possimus similique, molestiae magni eaque. Quam commodi voluptatibus consequuntur?',
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single post', 'post' => $post]);
});
