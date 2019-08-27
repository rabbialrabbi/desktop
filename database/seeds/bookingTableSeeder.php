<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class bookingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('booking')->insert([
            'route_id'=>1,
            'bus_id'=> 1,
            'seat_id'=>1,
            'date'=>'2019-08-30',
            'time'=>'08:20',
            'persons_name'=> 'Mr. second Man',
            'persons_number'=> '01723659050',
            'fare'=> 1200,
            'status'=>'Booked',
            'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('booking')->insert([
            'route_id'=>1,
            'bus_id'=> 1,
            'seat_id'=>5,
            'date'=>'2019-08-30',
            'time'=>'08:20',
            'persons_name'=> 'Mr. second Man',
            'persons_number'=> '01723659051',
            'fare'=> 1200,
            'status'=>'Booked',
            'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
