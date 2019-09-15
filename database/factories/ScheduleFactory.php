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
        'date'=>$faker->randomElement(['2019-09-14','2019-09-15','2019-09-16','2019-09-17','2019-09-18','2019-09-19','2019-09-20','2019-09-21']),
        'room_id'=>$faker->randomElement($rooms),
        'film_id'=>$faker->randomElement($films),
    ];
});
