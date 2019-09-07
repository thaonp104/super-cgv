<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Room;
use App\Film;

$factory->define(App\Schedule::class, function (Faker $faker) {
    $rooms = Room::pluck('id')->toArray();
    $films = Film::pluck('id')->toArray();
    return [
        'start_time'=>$faker->time('h:m'),
        'end_time'=>$faker->time('h:m'),
        'date'=>$faker->unixTime,
        'room_id'=>$faker->randomElement($rooms),
        'film_id'=>$faker->randomElement($films),
    ];
});
