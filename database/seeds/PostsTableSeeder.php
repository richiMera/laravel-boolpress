<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        for ($i=0; $i < 20; $i++) { 
            $time = $faker->dateTime();

            $post = new Post();
            $post->title = $faker->text(100);
            $post->subtitle = $faker->text(150);
            $post->author = $faker->name();
            $post->content= $faker->text(5000);
            $post->created_at= $time;
            $post->updated_at= $time;

            $post->save();
        }
    }
}
