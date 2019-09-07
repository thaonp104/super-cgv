<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Room;

$factory->define(App\Seat::class, function (Faker $faker) {
    $rooms = Room::pluck('id')->toArray();
    return [
         'name'=>$faker->unique()->word,
         'type'=>$faker->word,
         'desc'=>$faker->word,
         'room_id'=>$faker->randomElement($rooms),
    ];
});
