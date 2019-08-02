<?php

use Illuminate\Database\Seeder;

class routesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routes')->insert([
            'departure_id'=>1,
            'arrival_id'=>3,
            'est_distance'=>300,
            'est_time'=>7,
            'est_price'=>'550-1500',
        ]);

        DB::table('routes')->insert([
            'departure_id'=>1,
            'arrival_id'=>2,
            'est_distance'=>200,
            'est_time'=>7,
            'est_price'=>'350-1000',
        ]);

        DB::table('routes')->insert([
            'departure_id'=>1,
            'arrival_id'=>4,
            'est_distance'=>200,
            'est_time'=>7,
            'est_price'=>'550-1500',
        ]);

        DB::table('routes')->insert([
            'departure_id'=>1,
            'arrival_id'=>5,
            'est_distance'=>200,
            'est_time'=>7,
            'est_price'=>'550-1500',
        ]);

        DB::table('routes')->insert([
            'departure_id'=>1,
            'arrival_id'=>6,
            'est_distance'=>200,
            'est_time'=>7,
            'est_price'=>'550-1500',
        ]);

        DB::table('routes')->insert([
            'departure_id'=>2,
            'arrival_id'=>4,
            'est_distance'=>200,
            'est_time'=>7,
            'est_price'=>'800-1800',
        ]);
    }
}
