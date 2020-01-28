<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tag;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Tag::class, function (Faker $faker) {
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
    return [
        'title' => Arr::random($arrayWord)
    ];
});
