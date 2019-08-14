<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Ticket::class, function (Faker $faker) {
    return [
        'price' => $faker-> unique (true)->numberBetween(50,200),
        'seat_id'=>factory(App\Seat::class)->create()->id,
        'schedule_id'=>factory(App\Schedule::class)->create()->id,
        'bill_id'=>factory(App\Bill::class)->create()->id,
    ];
});
