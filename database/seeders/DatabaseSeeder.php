<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'

        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'

        ]);

        $work = Category::create([
            'name' => 'Wokk',
            'slug' => 'work'

        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id'=>$family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem ipsum dolar sit amet',
            'body' =>'Lorem ipsum dolar sit amet.Lorem ipsum dolar sit amet.Lorem ipsum dolar sit amet',

        ]);

          Post::create([
            'user_id' => $user->id,
            'category_id'=>$personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Lorem ipsum dolar sit amet',
            'body' =>'Lorem ipsum dolar sit amet.Lorem ipsum dolar sit amet.Lorem ipsum dolar sit amet',

        ]);

          Post::create([
            'user_id' => $user->id,
            'category_id'=>$work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolar sit amet',
            'body' =>'Lorem ipsum dolar sit amet.Lorem ipsum dolar sit amet.Lorem ipsum dolar sit amet',

        ]);


    }
}
