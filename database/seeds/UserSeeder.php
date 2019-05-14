<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'name'=> 'Admin',
           'email'=>'admin@g.com',
           'password'=> bcrypt(25252525)
        ]);
        DB::table('users')->insert([
        'name'=> 'User',
        'email'=>'user@g.com',
        'password'=> bcrypt(12345678)
    ]);
    }
}
