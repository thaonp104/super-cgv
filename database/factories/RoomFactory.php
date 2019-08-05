<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) {
    return [
        'name'=>$faker->unique()->numberBetween($min = 1, $max = 10),
        'total_seat'=>$faker->numberBetween($min = 50, $max = 100),
        'desc'=>$faker->word,
        'cinema_id'=>factory(App\Cinema::class)->create()->id,
    ];
});
