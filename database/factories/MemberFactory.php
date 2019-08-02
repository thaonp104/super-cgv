<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Member::class, function (Faker $faker) {
    return [
        'username'=>$faker->unique()->word,
        'password'=>$faker->word,
        'fullname'=>$faker->name,
        'role'=>$faker->word,
    ];
});
