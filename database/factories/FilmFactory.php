<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Film::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'type' => $faker->word,
        'leng' => $faker->numberBetween($min = 90, $max = 200),
        'release_date' => $faker->date,
        'like' => 0,
        
        'director' => $faker->name,
        'trang_thai' => $faker->randomDigit,
        'image' => 'images/240_10_27.jpg',
        'rated' => 'c18',
        'desc' => $faker->text,
        
    ];
});
