<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class agencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agency')->insert([
           'name'=>'SR Travels',
           'address'=>'Dhaka',
           'contact'=>'017XXXXXXXX',
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
//            'created_at' => date("Y-m-d H:i:s"), //also possible

        ]);

        DB::table('agency')->insert([
            'name'=>'TR Travels',
            'address'=>'Dhaka',
            'contact'=>'017XXXXXXXX',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('agency')->insert([
            'name'=>'Manik',
            'address'=>'Dhaka',
            'contact'=>'017XXXXXXXX',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agency')->insert([
            'name'=>'Nabil',
            'address'=>'Dhaka',
            'contact'=>'017XXXXXXXX',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agency')->insert([
            'name'=>'Hanif',
            'address'=>'Dhaka',
            'contact'=>'017XXXXXXXX',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
