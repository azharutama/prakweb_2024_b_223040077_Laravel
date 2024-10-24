<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
  public static function all()
  {
    return [
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
    ];
  }

  public static function find($slug): array
  {
    $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

    if (!$post) {
      abort(404);
    }

    return $post;
  }
}
