<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Schedule::class, function (Faker $faker) {
    return [
        'start_time'=>$faker->time,
        'end_time'=>$faker->time,
        'date'=>$faker->date,
        'room_id'=>factory(App\Room::class)->create()->id,
        'film_id'=>factory(App\Film::class)->create()->id,
    ];
});
