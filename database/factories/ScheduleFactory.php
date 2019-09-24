<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Room;
use App\Film;

$factory->define(App\Schedule::class, function (Faker $faker) {
    $rooms = Room::pluck('id')->toArray();
    $films = Film::pluck('id')->toArray();
//    $startingDate = $faker->dateTimeThisYear('+1 month');
    $startingDate = $faker->dateTimeBetween('today', '+10 days');
    $start = $startingDate->getTimestamp();
    $endingDate   = strtotime('+2 Hour', $startingDate->getTimestamp());
    return [
        'start_time'=>$start,
        'end_time'=>$endingDate,
        'room_id'=>$faker->randomElement($rooms),
        'film_id'=>$faker->randomElement($films),
    ];
});
