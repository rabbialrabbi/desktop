<?php

use Illuminate\Database\Seeder;

class busesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buses')->insert([
            'agency_id'=> 1,
            'number'=> 'KH-2028',
            'model'=>'Hino RM2',
            'sits'=>32,
            'departure_time'=> "8:20",
        ]);
        DB::table('buses')->insert([
            'agency_id'=> 2,
            'number'=> 'KH-4028',
            'model'=>'Hino',
            'sits'=>32,
            'departure_time'=> "8:20",
        ]);
    }
}
