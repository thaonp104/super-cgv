<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'id_card'=>$faker->unique()->numberBetween($min = 1, $max = 10),
        'name'=>$faker->name,
        'phone'=>$faker->e164PhoneNumber,
        'address'=>$faker->address,
        'email'=>$faker->unique()->email,
    ];
});
