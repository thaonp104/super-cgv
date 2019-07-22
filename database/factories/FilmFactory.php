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
        
        'director' => $faker->name,
        'trang_thai' => $faker->randomDigit,
        'image' => 'https://www.cgv.vn/media/catalog/product/cache/3/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/r/s/rsz_lion_king_poster__vst__final_1.jpg',
        'rated' => $faker->randomDigit,
        'desc' => $faker->word,
        
    ];
});
