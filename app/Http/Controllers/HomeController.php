<?php

namespace App\Http\Controllers;

use App\agency;
use App\bus;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['agencyDetails']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function agencyDetails($id){

//        $bus_list=  bus::with('agency','seat','route')->where(['agency_id'=>$id])->get();

//        $from = $bus_list->first()->route()->first()->departureCity()->first()->name;

//        foreach ($bus_list as $from){
//           $f[] = $from->route()->first()->arrivalCity()->first()->name;
//        }

        $agency = agency::findOrFail($id);
//        $data = COUNT($agency->bus()->get());

//        dd($agency->bus()->get());



        return view('agencyDetailsfromAgency',['agency'=>$agency]);

    }
}
