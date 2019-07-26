<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Schedule::class, function (Faker $faker) {
    return [
        'start_time' => $faker->time,
        'end_time' => $faker->time,
        'date' => $faker->date,
        'room_id' => $faker->numberBetween($min = 1, $max = 10),
        'film_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
