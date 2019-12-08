<?php

namespace App\Http\Controllers;

use App\agency;
use App\bus;
use App\city;
use App\data;
use App\route;
use Faker\Generator as Faker;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $data = new data();
        $data = $data->get_submenu_data('add');
        return view('adminPanel.add',['submenulist'=>$data,'add'=>'is-active']);
    }

    public function showRoute()
    {
        $data = (new data())->get_submenu_data('add');
        $routes = route::with(['departureCity','arrivalCity'])->get();
        $city= city::all();

        return view('adminPanel.addRoute',[
            'cities'=>$city,
            'routes'=>$routes,
            'submenulist'=>$data,
            'active'=>['add'=>'is-active']
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
        $data = (new data())->get_submenu_data('add');
        return view('adminPanel.addCity',[
            'submenulist'=>$data,
            'add'=>'is-active'
        ]);

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

    public function showBus()
    {
        $agency = agency::all();
        $route = route::with('departureCity','arrivalCity')->get();
        $data = (new data())->get_submenu_data('add');
        return view('adminPanel.addBus',[
            'routes'=>$route,
            'agencies'=>$agency,
            'submenulist'=>$data,
        ]);
    }

    public function storeBus()
    {
        $validation = request()->validate([
            "agency_id" => "required|numeric",
            "route_id" => "required|numeric",
            "number" => "required",
            "model" => "required",
            "type" => "required",
            "break" => "required",
            "seats" => "required|numeric",
            'fare' => "required|numeric",
            "departure_time" => "required|date_format:H:i",
        ]);

        bus::create($validation);

        return back()->with('message','');



    }
}
