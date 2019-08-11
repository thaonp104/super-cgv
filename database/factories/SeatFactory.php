<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Seat::class, function (Faker $faker) {
    return [
        // 'name'=>$faker->unique()->word,
        // 'type'=>$faker->word,
        // 'desc'=>$faker->word,
//        'room_id'=>$i++,
    ];
});
