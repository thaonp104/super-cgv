<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CinemaSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(MemberSeeder::class);
        $this->call(FilmSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(ScheduleSeeder::class);
        $this->call(BillSeeder::class);
        $this->call(SeatSeeder::class);
        $this->call(TicketSeeder::class);
    }
}
