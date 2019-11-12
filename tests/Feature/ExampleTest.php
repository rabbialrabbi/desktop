<?php

namespace Tests\Feature;

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

    public function testFindCity()
    {
        $CityId = factory(city::class)->create(['name'=>'Dhaka']);
        $cityName = city::findOrFail($CityId)->first()->name;
        $this->assertEquals('Dhaka', $cityName);
    }

    public function testRouteDetails()
    {
        factory(route::class,10)->create();
        $routes = route::with('departureCity')->get();
        foreach ($routes as $route){
            $city[]=$route->departureCity()->first()->name;
        }
        dd($city);
        $this->assertCount(10,$city);

    }
}
