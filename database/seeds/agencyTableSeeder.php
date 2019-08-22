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
            'image_name'=> 'srtravelsLogo.png',
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
//            'created_at' => date("Y-m-d H:i:s"), //also possible

        ]);

        DB::table('agency')->insert([
            'name'=>'TR Travels',
            'address'=>'Dhaka',
            'contact'=>'017XXXXXXXX',
            'image_name'=> 'trtravelsLogo.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('agency')->insert([
            'name'=>'Manik',
            'address'=>'Dhaka',
            'contact'=>'017XXXXXXXX',
            'image_name'=> 'maniktravelsLogo.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agency')->insert([
            'name'=>'Nabil',
            'address'=>'Dhaka',
            'contact'=>'017XXXXXXXX',
            'image_name'=> 'nabiltravelsLogo.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agency')->insert([
            'name'=>'Hanif',
            'address'=>'Dhaka',
            'contact'=>'017XXXXXXXX',
            'image_name'=> 'haniftravelsLogo.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agency')->insert([
            'name'=>'Alhamra',
            'address'=>'Dhaka',
            'contact'=>'017XXXXXXXX',
            'image_name'=> 'alhamraLogo.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agency')->insert([
            'name'=>'Desh Travels',
            'address'=>'Dhaka',
            'contact'=>'017XXXXXXXX',
            'image_name'=> 'deshtravelsLogo.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agency')->insert([
            'name'=>'Eagle Travels',
            'address'=>'Dhaka',
            'contact'=>'017XXXXXXXX',
            'image_name'=> 'eagletravelsLogo.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agency')->insert([
            'name'=>'Ena Travels',
            'address'=>'Dhaka',
            'contact'=>'017XXXXXXXX',
            'image_name'=> 'enatravelsLogo.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agency')->insert([
            'name'=>'Green Line Interprise',
            'address'=>'Dhaka',
            'contact'=>'017XXXXXXXX',
            'image_name'=> 'greenlineLogo.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agency')->insert([
            'name'=>'Sakura Travels',
            'address'=>'Dhaka',
            'contact'=>'017XXXXXXXX',
            'image_name'=> 'sakuratravelsLogo.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agency')->insert([
            'name'=>'S.Alom Travels',
            'address'=>'Dhaka',
            'contact'=>'017XXXXXXXX',
            'image_name'=> 'salomtravelsLogo.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agency')->insert([
            'name'=>'Shohag Travels',
            'address'=>'Dhaka',
            'contact'=>'017XXXXXXXX',
            'image_name'=> 'shohagtravelsLogo.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agency')->insert([
            'name'=>'Shymoli Travels',
            'address'=>'Dhaka',
            'contact'=>'017XXXXXXXX',
            'image_name'=> 'shymolitravelsLogo.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
