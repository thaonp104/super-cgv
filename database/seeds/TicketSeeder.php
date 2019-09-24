<?php

use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $faker = Faker\Factory::create();
//        $bill_id = 1 ;
//        for( $i = 1 ; $i <= 5 ; $i++ ){
//            for( $j = 1 ; $j <= 100 ; $j++ ){
//                App\Ticket::create([
//                    'price'=>$faker->randomElement(['85000','120000','140000']),
//                    'seat_id' => $i,
//                    'schedule_id' => $j,
//                    'bill_id' => $bill_id++,
//                ]);
//            }
//        }
        factory(App\Ticket::class, 200)->create();
    }
}
