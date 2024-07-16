<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Rating;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        User::factory(10)->create();
        Article::factory(20)->create();
        Video::factory(20)->create();
        Image::factory(20)->create();
        Comment::factory(20)->create();
        Rating::factory(20)->create();
    }
}
