<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use GuzzleHttp\Promise\Create;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(3)->create();

        User::create([
            "name" => "Sandy Meliyawan",
            "username" => "SandyM060101",
            "email" => "sandymeliyawan@gmail.com",
            "password" => bcrypt('12345678')
        ]);
        User::create([
            "name" => "Salsa Dwiyanti",
            "username" => "Salsa16012001",
            "email" => "salsadwiyanti@gmail.com",
            "password" => bcrypt('12345678')
        ]);

        User::create([
            "name" => "Zihan",
            "username" => "zihan",
            "email" => "Zihan@gmail.com",
            "password" => bcrypt('12345678')
        ]);

        User::create([
            "name" => "Admin",
            "username" => "admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt('admin')
        ]);

        Category::create([
            "name" => "Islamic",
            "slug" => "islamic"
        ]);

        Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);

        Category::create([
            "name" => "Codding",
            "slug" => "codding"
        ]);

        Category::create([
            "name" => "Romance",
            "slug" => "romance"
        ]);
        Category::create([
            "name" => "Family",
            "slug" => "family"
        ]);
        Category::create([
            "name" => "Natural",
            "slug" => "natural"
        ]);

        Post::factory(20)->create();
    }
}
