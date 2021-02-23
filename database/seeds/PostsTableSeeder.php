<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        for ($i=0; $i < 10; $i++) { 
            $time = $faker->dateTime();

            $post = new Post();
            $post->title = $faker->text(90);
            $post->subtitle = $faker->text(150);
            $post->author = $faker->name();
            $post->slug = Str::slug($post->title);
            $post->content= $faker->text(3000);
            $post->created_at= $time;
            $post->updated_at= $time;

            $post->save();
        }
    }
}
