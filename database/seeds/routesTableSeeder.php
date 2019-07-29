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
            'buses_id'=>1,
            'departure_id'=>1,
            'arrival_id'=>3,
            'time'=>'8:20',
            'est_distance'=>200,
            'est_time'=>7,
            'est_price'=>'550-1500',
            'break'=>'Food Village, 20m'

        ]);
    }
}
