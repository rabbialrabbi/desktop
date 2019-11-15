<?php

namespace App\Http\Controllers;

use App\city;
use App\route;
use Faker\Generator as Faker;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function showRoute()
    {
        $routes = route::with(['departureCity','arrivalCity'])->get();
        $city= city::all();

        return view('generator.addRoute',[
            'cities'=>$city,
            'routes'=>$routes
        ]);
    }

    public function storeRoute()
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


        if(! $repeatValidation){
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

    public function showCity()
    {
        return view('generator.addCity');

    }

    public function storeCity()
    {
        // Regular expression for validate the link
//        $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';

        $sanitizeData = request()->validate([
            'name'=>'required|min:3',
            'description'=>'required|min:3',
            'link'=> 'required'  // edo create regular expression for link
        ]);


        $repeatValidation = city::where([
            'name'=>request()->name
        ])->first() ;


        if(!$repeatValidation){
            city::create($sanitizeData);

            return back()->with('message','City add Successfully');
        }else{
            return back()->with('message','City is already Exist');
        }
    }
}
