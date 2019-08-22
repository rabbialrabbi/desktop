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
            'route_id'=>1,
            'number'=> 'KH-2028',
            'model'=>'Hino RM2',
            'type'=> 'AC',
            'seats'=>3,
            'departure_time'=> "8:20",
        ]);

        DB::table('buses')->insert([
            'agency_id'=> 1,
            'route_id'=>1,
            'number'=> 'KH-2029',
            'model'=>'Hino RM2',
            'type'=> 'AC',
            'seats'=>3,
            'departure_time'=> "11:50",
        ]);

        DB::table('buses')->insert([
            'agency_id'=> 1,
            'route_id'=>1,
            'number'=> 'KH-2030',
            'model'=>'Hino RM2',
            'type'=> 'AC',
            'seats'=>3,
            'departure_time'=> "20:50",
        ]);

        DB::table('buses')->insert([
            'agency_id'=> 2,
            'route_id'=>1,
            'number'=> 'KH-4028',
            'model'=>'Hino',
            'type'=> 'NON-AC',
            'seats'=>4,
            'departure_time'=> "8:3",
        ]);

        DB::table('buses')->insert([
            'agency_id'=> 2,
            'route_id'=>1,
            'number'=> 'KH-4029',
            'model'=>'Hino',
            'type'=> 'NON-AC',
            'seats'=>4,
            'departure_time'=> "12:00",
        ]);

        DB::table('buses')->insert([
            'agency_id'=> 2,
            'route_id'=>1,
            'number'=> 'KH-4030',
            'model'=>'Hino',
            'type'=> 'NON-AC',
            'seats'=>4,
            'departure_time'=> "20:00",
        ]);

        DB::table('buses')->insert([
            'agency_id'=> 3,
            'route_id'=>1,
            'number'=> 'KH-6028',
            'model'=>'Hyundai',
            'type'=> 'AC',
            'seats'=>3,
            'departure_time'=> "8:3",
        ]);

        DB::table('buses')->insert([
            'agency_id'=> 3,
            'route_id'=>1,
            'number'=> 'KH-6029',
            'model'=>'Hyundai',
            'type'=> 'AC',
            'seats'=>3,
            'departure_time'=> "12:00",
        ]);

        DB::table('buses')->insert([
            'agency_id'=> 3,
            'route_id'=>1,
            'number'=> 'KH-6030',
            'model'=>'Hyundai',
            'type'=> 'AC',
            'seats'=>3,
            'departure_time'=> "20:00",
        ]);
    }
}
