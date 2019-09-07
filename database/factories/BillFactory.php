<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Client;
use App\Member;

$factory->define(App\Bill::class, function (Faker $faker) {
    $clients = Client::pluck('id')->toArray();
    $members = Member::pluck('id')->toArray();
    return [
        'payment_date' => $faker->date(),
        'payment_type' => $faker->word,
        'quantity' => $faker->numberBetween($min = 1, $max = 100),
        'client_id'=> $faker->randomElement($clients),
        'member_id'=> $faker->randomElement($members),
    ];
});
