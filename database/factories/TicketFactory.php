<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Ticket::class, function (Faker $faker) {
    return [
        'price'=>$faker->numberBetween($min = 80000, $max = 120000),
        'seat_id'=>factory(App\Seat::class)->create()->id,
        'schedule_id'=>factory(App\Schedule::class)->create()->id,
        'bill_id'=>factory(App\Bill::class)->create()->id,
    ];
});
