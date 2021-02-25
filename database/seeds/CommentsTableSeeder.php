<?php

use Illuminate\Database\Seeder;
use App\Comment;
use App\Post;
use Faker\Generator as Faker;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        $posts = Post::all();
        foreach ($posts as $post) {
            for ($i=0; $i < 2 ; $i++) { 
                $comment = new Comment();

                $comment->post_id = $post->id;
                $comment->user_name = $faker->userName();
                $comment->text = $faker->text(80);

                $comment->save();
            }
        }
    }
}
