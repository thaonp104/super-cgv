<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Bill::class, function (Faker $faker) {
    return [
        'payment_date' => $faker->date(),
        'payment_type' => $faker->word,
        'quantity' => $faker->numberBetween($min = 1, $max = 100),
        'client_id'=>factory(App\Client::class)->create()->id,
        'member_id'=>factory(App\Member::class)->create()->id,
    ];
});
