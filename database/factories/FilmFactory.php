<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Film::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'type' => $faker->randomElement(['kinh dị','Lãng mạn','Hành động']),
        'leng' => $faker->numberBetween($min = 90, $max = 200),
        'release_date' => $faker->unixTime,
        'like' => 0,
        'director' => $faker->name,
        'trang_thai' => $faker->randomElement(['0','1']),
        'image' => $faker->randomElement(['images/240_10_27.jpg','images/240_10_47.jpg','images/240_12_3.jpg','images/240_12_6.jpg','images/240_14_2.jpg']),
        'rated' => $faker->randomElement(['c18','c13','c16','cp']),
        'desc' => 'Hoàng là một chàng trai trẻ ôm mộng thành ngôi sao ca nhạc, 
        vì chưa chưa gặp thời',
        
    ];
});

