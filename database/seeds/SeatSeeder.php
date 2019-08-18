<?php

use Illuminate\Database\Seeder;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for( $i = 1 ; $i <= 9 ; $i++ ){
            for( $j = 1 ; $j <= 129 ; $j++ ){
                App\Seat::create([
                    'name'=>$faker->unique()->hexcolor,
                    'type'=>$faker->word,
                    'desc'=>$faker->word,
                    'room_id' => $i,
                ]);
            }
        }
 //       factory(App\Seat::class, 2200)->create();
    }
}
