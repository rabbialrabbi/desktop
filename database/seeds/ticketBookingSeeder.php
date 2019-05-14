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
        'user_id'=>2,
        'agency'=>'Romana',
        'route'=>'air',
        'from'=>'Australia',
        'to'=>'Brazil',
        'price'=>'150',
        'date'=>'2019/05/11',
        ]);

        DB::table('ticket_booking')->insert([
        'user_id'=>2,
        'agency'=>'Royel',
        'route'=>'air',
        'from'=>'England',
        'to'=>'Canada',
        'price'=>'180',
        'date'=>'2019/05/15',
        ]);

        DB::table('ticket_booking')->insert([
        'user_id'=>2,
        'agency'=>'Romana',
        'route'=>'air',
        'from'=>'USA',
        'to'=>'Peru',
        'price'=>'110',
        'date'=>'2019/05/12',
        ]);

        DB::table('ticket_booking')->insert([
        'user_id'=>2,
        'agency'=>'Romana',
        'route'=>'air',
        'from'=>'Australia',
        'to'=>'Brazil',
        'price'=>'150',
        'date'=>'2019/05/15',
        ]);

        DB::table('ticket_booking')->insert([
            'user_id'=>2,
            'agency'=>'Romana',
            'route'=>'air',
            'from'=>'Japan',
            'to'=>'Canada',
            'price'=>'150',
            'date'=>'2019/05/17',
        ]);

        DB::table('ticket_booking')->insert([
            'user_id'=>2,
            'agency'=>'Romana',
            'route'=>'air',
            'from'=>'Peru',
            'to'=>'Brazil',
            'price'=>'20',
            'status'=>'Pending',
            'date'=>'2019/05/15',
        ]);

        DB::table('ticket_booking')->insert([
            'user_id'=>2,
            'agency'=>'Romana',
            'route'=>'air',
            'from'=>'Peru',
            'to'=>'Brazil',
            'price'=>'20',
            'status'=>'Pending',
            'date'=>'2019/05/15',
        ]);

        DB::table('ticket_booking')->insert([
            'user_id'=>2,
            'agency'=>'Romana',
            'route'=>'air',
            'from'=>'Peru',
            'to'=>'Brazil',
            'price'=>'20',
            'status'=>'Sold',
            'date'=>'2019/05/15',
        ]);


    }
}
