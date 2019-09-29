<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for( $i = 1 ; $i <= 3 ; $i++ ){
            for( $j = 1 ; $j <= 3 ; $j++ ){
                App\Room::create([
                    'name' => $i,
                    'cinema_id' => $j,
                    'total_seat'=>129,
                    'desc'=>$faker->word,
                ]);
            }
        }
        // factory(App\Room::class, 3)->create();
    }
}
