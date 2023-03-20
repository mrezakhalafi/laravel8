<?php

namespace App\Models;

class Post
{

    private static $blog_post = [
        [
            "judul" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "M Reza Khalafi",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate nulla fugiat aperiam exercitationem quisquam dolores vel assumenda eum vero aut. Sapiente porro asperiores debitis inventore enim sunt quia minus esse cumque eos consectetur quisquam nam dolore quibusdam voluptatum vel nostrum voluptas illum qui, error architecto consequatur dignissimos natus placeat. Corporis possimus voluptas, hic alias modi aliquam at eos sequi minima quibusdam sint porro, autem mollitia tenetur, laboriosam repellat? Explicabo eos doloribus possimus voluptate nemo! Perspiciatis ratione voluptatum sit. Pariatur, expedita."
        ],
        [
            "judul" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sweetcaatz",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate nulla fugiat aperiam exercitationem quisquam dolores vel assumenda eum vero aut. Sapiente porro asperiores debitis inventore enim sunt quia minus esse cumque eos consectetur quisquam nam dolore quibusdam voluptatum vel nostrum voluptas illum qui, error architecto consequatur dignissimos natus placeat. Corporis possimus voluptas, hic alias modi aliquam at eos sequi minima quibusdam sint porro, autem mollitia tenetur, laboriosam repellat? Explicabo eos doloribus possimus voluptate nemo! Perspiciatis ratione voluptatum sit. Pariatur, expedita."
        ]
    ];

    public static function all()
    {

        return collect(self::$blog_post);
    }

    public static function find($slug)
    {

        $posts = static::all();
        // $post = [];

        // foreach ($posts as $p) {

        //     if ($p['slug'] == $slug) {
        //         $new_post = $p;
        //     }
        // }

        $post = $posts->firstWhere('slug', $slug);

        return $post;
    }
}
