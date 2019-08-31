<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'phone'=>$faker->e164PhoneNumber,
        'address'=>$faker->address,
        'email'=>$faker->unique()->email,
        'password'=>$faker->password,
    ];
});
