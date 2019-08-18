<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Ticket::class, function (Faker $faker) {
    return [
  //      'price'=>$faker->randomElement(['85000','120000','140000']),
        // 'seat_id'=>$i,
        // 'schedule_id'=>$i,
        //'bill_id'=>$faker->unique()->numberBetween($min = 1, $max = 20000),
    ];
});
