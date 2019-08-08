<?php

use Illuminate\Support\Facades\DB;
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
        $this->call(UserSeeder::class);
        $this->call(ticketBookingSeeder::class);
        $this->call(citySeeder::class);
        $this->call(agencyTableSeeder::class);
        $this->call(busesTableSeeder::class);
        $this->call(seatTableSeeder::class);
        $this->call(routesTableSeeder::class);
    }
}
