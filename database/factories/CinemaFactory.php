<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Cinema::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'address' => $faker->unique()->address,
        'desc' => $faker->text,
        'hotline' => $faker->e164PhoneNumber,
    ];
});
