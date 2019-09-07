<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Cinema;

$factory->define(App\Room::class, function (Faker $faker) {
    $cinemas = Cinema::pluck('id')->toArray();
    return [
        'name'=>$faker->numberBetween($min = 1, $max = 10),
        'total_seat'=>220,
        'desc'=>$faker->word,
        'cinema_id'=>$faker->randomElement($cinemas),
    ];
});
