<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Post;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        factory(Tag::class, 12) -> create() -> each(function($tag){
                    $post = Post::inRandomOrder() -> take(5) ->get();
                    $tag->posts()->attach($post);
        });
    }
    
}
