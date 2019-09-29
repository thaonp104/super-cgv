<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Cinema;

$factory->define(App\Room::class, function (Faker $faker) {
    // $cinemas = Cinema::pluck('id')->toArray();
    // return [
    //     'name'=>$faker->numberBetween($min = 1, $max = 3),
    //     'total_seat'=>129,
    //     'desc'=>$faker->word,
    //     'cinema_id'=>$faker->randomElement($cinemas),
    // ];
});
