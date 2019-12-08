<?php

namespace App\Http\Controllers;

use App\agency;
use App\bus;
use App\city;
use App\route;
use Faker\Generator as Faker;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $sub_menu_data = $this->get_submenu_data('add');
        return view('adminPanel.add',['submenulist'=>$sub_menu_data,'add'=>'is-active']);
    }

    public function showRoute()
    {
        $sub_menu_data = $this->get_submenu_data('add');
        $routes = route::with(['departureCity','arrivalCity'])->get();
        $city= city::all();

        return view('adminPanel.addRoute',[
            'cities'=>$city,
            'routes'=>$routes,
            'submenulist'=>$sub_menu_data,
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
        $sub_menu_data = $this->get_submenu_data('add');
        return view('adminPanel.addCity',[
            'submenulist'=>$sub_menu_data,
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
        $sub_menu_data = $this->get_submenu_data('add');
        return view('adminPanel.addBus',[
            'routes'=>$route,
            'agencies'=>$agency,
            'submenulist'=>$sub_menu_data,
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


    public function get_submenu_data($menu_name){
        switch ($menu_name) {
            case "add":
                return $data =(object) [
                    (object) ['menu_name'=>'Add City', 'link_name'=>'add.city','active_class'=>'add_city'],
                    (object)['menu_name'=>'Add Route', 'link_name'=>'add.route','active_class'=>'add_route'],
                    (object)['menu_name'=>'Add Bus', 'link_name'=>'add.bus','active_class'=>'add_bus'],
                ];
                break;
            default:
                return 'error';
        }

    }
}
