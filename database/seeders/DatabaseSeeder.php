<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Reply;
use App\Models\Category;
use App\Models\Like;
use App\Models\Question;
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
        // \App\Models\User::factory(10)->create();
        User::factory(10)->create();
        Category::factory(5)->create();
        Question::factory(10)->create();
        Reply::factory(50)->create()->each(function ($reply){
            return $reply->like()->save((Like::factory())->make());
        });
        //factory(User::class, 10)->create();//
    }
}
