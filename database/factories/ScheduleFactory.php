<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Schedule::class, function (Faker $faker) {
    return [
        'start_time'=>$faker->time('h:m'),
        'end_time'=>$faker->time('h:m'),
        'date'=>$faker->unixTime,
        'room_id'=>$faker->numberBetween($min = 1, $max = 3),
        'film_id'=>$faker->numberBetween($min = 1, $max = 10),
    ];
});
