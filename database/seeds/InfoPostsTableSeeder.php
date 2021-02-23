<?php

use Illuminate\Database\Seeder;
use App\InfoPost;
use App\Post;
use Faker\Generator as Faker;

class InfoPostsTableSeeder extends Seeder
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
            $infoPost = new InfoPost();
            $infoPost->post_id = $post->id;
            $infoPost->post_status = $faker->randomElement(['public', 'private', 'draft']);
            $infoPost->comment_status = $faker->randomElement(['open', 'closed']);

            $infoPost->save();

        }
    }
}
