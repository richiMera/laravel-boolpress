<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    
    public function run()
    {
        $tags = [
            'Economy',
            'Food',
            'Sport',
            'Family',
            'Cinema'
        ];

        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->slug = Str::slug($tag);
            $newTag->save();

        }
    
    }
}
