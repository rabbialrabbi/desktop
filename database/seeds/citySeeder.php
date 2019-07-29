<?php

use Illuminate\Database\Seeder;

class citySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city')->insert([
            'name'=> 'Dhaka',
            'description'=> 'Dhaka (/ˈdɑːkə/ DAH-kə or /ˈdækə/ DAK-ə; Bengali: ঢাকা, pronounced [ɖʱaka]), formerly known as Dacca,[10] is the capital and largest city of Bangladesh. It is one of the largest and most densely populated cities in the world,[6][11] with a population of 18.2 million people in the Greater Dhaka Area as of 2016',
            'link'=>'https://en.wikipedia.org/wiki/Dhaka',
        ]);

        DB::table('city')->insert([
            'name'=> 'Bogura',
            'description'=> 'Bogra, officially known as Bogura, is a major city located in the Bogra District, Rajshahi Division, Bangladesh. It is major commercial hub. The Bogra bridge connects the Rajshahi Division and Rangpur Division. This city is also known as the capital of North Bengal of Bangladesh. Shatmatha is the heart of this city',
            'link'=>'https://en.wikipedia.org/wiki/Bogra',
        ]);

        DB::table('city')->insert([
            'name'=> 'Rangpur',
            'description'=> 'Rangpur (Bengali: রংপুর) is one of the major cities in Bangladesh and Rangpur Division. Rangpur was declared a district headquarters on 16 December 1769, and established as a municipality in 1869, making it one of the oldest municipalities in Bangladesh.[3][4] The municipal office building was erected in 1892 under the precedence Raja Janaki Ballav, Sen. Chairman of the municipality. During the period of 1890, "Shyama sundari khal" was excavated for improvement of the town.',
            'link'=>'https://en.wikipedia.org/wiki/Rangpur,_Bangladesh',
        ]);
    }
}
