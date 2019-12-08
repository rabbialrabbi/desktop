<?php

namespace Tests\Feature;

use App\bus;
use App\city;
use App\route;
use Tests\TestCase;
use Faker\Generator as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testInputTest()
    {
        $responses = $this->get('/admin/bus/create', [
            "agency_id" => 1,
            "route_id" => 5,
            "number" => 'KH-2321',
            "model" => "Hino Classic",
            "type" => "NON A/C",
            "break" => "Fani Notun bajar",
            "seats" => 40,
            "fare"=>350,
            "departure_time" => "8:20",
            ]);

       $bus =  bus::all();

       $this->assertCount(1,$bus);

//        $this->assertEquals(1,$bus->id);
  }
}
