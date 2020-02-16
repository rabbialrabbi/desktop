<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\booking;
use App\city;
use App\route;
use Faker\Generator as Faker;


$factory->define(booking::class, function (Faker $faker) {
    return [
    'agency_id'=>1,
    'route_id'=>2,
    'bus_id'=>10,
    'seat_id'=>2,
    'date'=>'2020/01/20',
    'time'=>'8:15:00',
    'persons_name'=>'Mr. Gentel Man',
    'persons_number'=> '01723659050',
    'fare'=>350,
    'status'=>'Booked'
    ];
});

$factory->define(city::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
    ];
});

$factory->define(route::class, function (Faker $faker) {
    return [
    'departure_id'=> factory(city::class)->create()->id,
    'arrival_id'=>factory(city::class)->create()->id,
    'est_distance'=> $faker->randomDigit,
    'est_time'=> $faker->time($format = 'H:i'),
    'est_price'=> $faker->randomDigit,
//        'name' => $faker->name,
//        'description' => $faker->sentence,
    ];
});
