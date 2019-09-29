<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Seat;
use App\Bill;
use App\Schedule;

$factory->define(App\Ticket::class, function (Faker $faker) {
    // $seats = Seat::pluck('id')->toArray();
    // $bills = Bill::pluck('id')->toArray();
    // $schedules = Schedule::pluck('id')->toArray();
    // return [
    //      'price'=>$faker->randomElement(['85000','120000','140000']),
    //      'seat_id'=>$faker->unique()->randomElement($seats),
    //      'schedule_id'=>$faker->randomElement($schedules),
    //      'bill_id'=>$faker->randomElement($bills),
    // ];
});
