<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Post::factory(20)->create();

        // Post::create([
        //     "title" => "Post 1",
        //     "slug" => "post-1",
        //     "category_id" => "1",
        //     "user_id" => "1",
        //     "excerp" => "Singkat 1",
        //     "body" => "Panjang 1"
        // ]);

        // Post::create([
        //     "title" => "Post 2",
        //     "slug" => "post-2",
        //     "category_id" => "1",
        //     "user_id" => "1",
        //     "excerp" => "Singkat 2",
        //     "body" => "Panjang 2"
        // ]);

        // Post::create([
        //     "title" => "Post 3",
        //     "slug" => "post-3",
        //     "category_id" => "3",
        //     "user_id" => "1",
        //     "excerp" => "Singkat 3",
        //     "body" => "Panjang 3"
        // ]);

        Category::create([
            "name" => "Category 1",
            "slug" => "category-1",
        ]);

        // User::create([
        //     "name" => "M Reza Khalafi",
        //     "email" => "mrezakhalafi@yahoo.com",
        //     "email_verified_at" => date('Y:m:d h:i:s'),
        //     "password" => bcrypt('12345')
        // ]);
    }
}
