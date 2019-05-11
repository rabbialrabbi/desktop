<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ticketBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ticket_booking')->insert([
        'user_id'=>1,
        'agency'=>'Romana',
        'route'=>'air',
        'from'=>'Australia',
        'to'=>'Brazil',
        'price'=>'150',
        'date'=>'2019/05/11',
        ]);

        DB::table('ticket_booking')->insert([
        'user_id'=>1,
        'agency'=>'Royel',
        'route'=>'air',
        'from'=>'England',
        'to'=>'Canada',
        'price'=>'180',
        'date'=>'2019/05/15',
        ]);

        DB::table('ticket_booking')->insert([
        'user_id'=>1,
        'agency'=>'Romana',
        'route'=>'air',
        'from'=>'USA',
        'to'=>'Peru',
        'price'=>'110',
        'date'=>'2019/05/12',
        ]);

        DB::table('ticket_booking')->insert([
        'user_id'=>1,
        'agency'=>'Romana',
        'route'=>'air',
        'from'=>'Australia',
        'to'=>'Brazil',
        'price'=>'150',
        'date'=>'2019/05/15',
        ]);


    }
}
