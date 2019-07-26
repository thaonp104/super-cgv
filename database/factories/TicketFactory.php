<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Ticket::class, function (Faker $faker) {
    return [
        'price' => $faker->numberBetween($min = 45000, $max = 90000),
        'seat_id' => $faker->numberBetween($min = 1, $max = 10),
        'schedule_id' => $faker->numberBetween($min = 1, $max = 10),
        'bill_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
