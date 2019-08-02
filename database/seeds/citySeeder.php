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

        DB::table('city')->insert([
            'name'=> 'Chittagong',
            'description'=> 'Chittagong (/tʃɪtəɡɒŋ/), officially known as Chattogram,[4] is a major coastal city and financial centre in southeastern Bangladesh. The city has a population of more than 2.5 million[1] while the metropolitan area had a population of 4,009,423 in 2011,[1] making it the second-largest city in the country. It is the capital of an eponymous District and Division. The city is located on the banks of the Karnaphuli River between the Chittagong Hill Tracts and the Bay of Bengal. Modern Chittagong is Bangladesh\'s second most significant urban center after Dhaka.',
            'link'=>'https://en.wikipedia.org/wiki/Chittagong',
        ]);

        DB::table('city')->insert([
            'name'=> 'Khulna',
            'description'=> 'Khulna (Bengali: খুলনা [ˈkʰulna]) is the third-largest city of Bangladesh.[5] It is the administrative seat of Khulna District and Khulna Division. As of the 2011 census, the city has a population of 663,342.[2] The encompassing Khulna metro area had an estimated population of 1.022 million as of 2014.',
            'link'=>'https://en.wikipedia.org/wiki/Khulna',
        ]);

        DB::table('city')->insert([
            'name'=> 'Barisal',
            'description'=> 'Barisal District, officially known as Barishal District,[1] is a district in south-central Bangladesh, formerly called Bakerganj district, established in 1797.[2] Its headquarters are in the city of Barisal, which is also the headquarters of Barisal Division',
            'link'=>'https://en.wikipedia.org/wiki/Barisal_District',
        ]);
    }
}
