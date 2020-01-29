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
        /*factory(Tag::class, 12) -> create() -> each(function($tag){
                    $post = Post::inRandomOrder() -> take(5) ->get();
                    $tag->posts()->attach($post);
        });*/
        $arrayWord = [
            'sport',
            'music',
            'tv-show',
            'computer',
            'programmer',
            'coding',
            'social',
            'relax',
            'islands',
            'trip',
            'tour',
            'hotel',
        ];
        //Tag::all();
        //Tag::where('campo', 'valore')->get();
        //$findTag = Tag::where('title', 'ciao')->first(); 
        /*
            {
                id: 7,
                title: 'ciao',
                ...
            }

            null
        */
        foreach($arrayWord as $word) { //Listo i miei tag da inserire...
            $tag = Tag::create([
                'title' => $word
            ]);

            //Associo ad N post il tag appena inserito
            $post = Post::inRandomOrder() -> take() ->get();
            $tag->posts()->attach($post);
        }
    }
    
}
