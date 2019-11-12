<?php

namespace App\Http\Controllers;

use App\city;
use App\route;
use Faker\Generator as Faker;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function showAddRoute()
    {
        $routes = route::with(['departureCity','arrivalCity'])->get();
        $city= city::all();

        return view('generator.addRoute',[
            'cities'=>$city,
            'routes'=>$routes
        ]);
    }

    public function addRoute()
    {


        $validation = request()->validate([
            "fromCity" => 'required',
            "toCity" => 'required',
            "distance" => 'required',
            "time" => 'required',
            "price" => 'required',
        ]);

        $repeatValidation = route::where([
            'departure_id'=>request()->fromCity,
            'arrival_id'=>request()->toCity
        ])->first() ;


        if(! $repeatValidation->id){
            route::create([
                'departure_id' => request()->fromCity,
                'arrival_id' => request()->toCity,
                'est_distance' => request()->distance,
                'est_time' => request()->time,
                'est_price' => request()->price,
            ]);

            return redirect()->back()->with('message','submit successful');

        }else{

            return redirect()->back()->with('message','Route is already Available');

        }
    }
}
