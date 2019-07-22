<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Film;

class FilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Film::class, 10)->create();
    }
}
























// $faker = Faker::create();

        // for( $i = 0 ; $i < 10 ; $i++ ){
        //     $user = Film::create([
        //         'name' => $faker->unique()->name,
        //         'type' => $faker->type,
        //         'leng' => $faker->leng,
        //         'release_date' => new DataTime,
                
        //         'director' => $faker->director,
        //         'trang_thai' => $faker->trangthai,
        //         'image' => 'https://www.cgv.vn/media/catalog/product/cache/3/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/r/s/rsz_lion_king_poster__vst__final_1.jpg',
        //         'rate' => $faker->rate,
        //         'desc' => $faker->desc
        //     ]);
        // }
