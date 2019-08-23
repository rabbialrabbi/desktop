<?php

namespace App\Http\Controllers;

use App\agency;
use App\bus;
use App\city;
use App\seat;
use App\User;
use App\booking;
use App\ticket_booking;
use Illuminate\Http\Request;
use App\route;
use Illuminate\Support\Facades\DB;


class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['showAgency','showBus','showSeat','booking']);
    }

    public function showAgency($from_id, $to_id)
    {
       $route_id= route::where(['departure_id'=>$from_id, 'arrival_id'=>$to_id])->first();

           $destination_from=city::findOrFail($from_id);
           $destination_to=city::findOrFail($to_id);


       $find_buses = DB::table('buses')->select(DB::raw('count(id) as bus_count, agency_id'))->where('route_id','=',$route_id->id)->groupBy('agency_id')->get();


       foreach ($find_buses as $buses) {
           $bus_list[] = [
               'agency' => agency::findOrFail($buses->agency_id)->name,
               'agency_id' => $buses->agency_id,
               'trips' => $buses->bus_count,
               'first_trip' => bus::where(['route_id' => $route_id->id, 'agency_id' => $buses->agency_id])
                   ->first()->departure_time,
               'last_trip' => bus::where(['route_id' => $route_id->id, 'agency_id' => $buses->agency_id])
                   ->orderBy('departure_time', 'desc')
                   ->first()->departure_time
           ];
       }

           return view('agencyDetails', [
               'routes'=>$bus_list,
               'destination_from'=>$destination_from,
               'destination_to'=>$destination_to,
               'route_info'=>$route_id

           ]);

    }

    public function showBus(){

if(@$_GET['agency_id'] && @$_GET['route_id']){
    $bus_list=  bus::with('agency','seat')->where(['agency_id'=>$_GET['agency_id'], 'route_id'=>$_GET['route_id']])->get();
}else{
    $bus_list=  bus::with('agency','seat','route')->where(['agency_id'=>$_GET['agencyId']])->get();
}


           return view('busDetails',['buses'=>$bus_list]);


    }

    public function showSeat($bus_id, seat $seat)
    {


        $bus = bus::findOrFail($bus_id);
        $columns = $seat->getSeatDetails($bus_id);

        return view('seatDetails',[
            'columns'=>$columns,
            'seatAline' =>$bus->seats
            ]);
    }







    public function create()
    {

        return view('form.post');
    }

    public function store(Request $request)
    {
        $user_id= auth()->id();
        $attributes = request()->validate([
            'agency'=>['required'],
            'route'=>['required'],
            'from'=>['required'],
            'date'=>['required'],
            'to'=>['required'],
            'price'=>['required'],
        ]);

        ticket_booking::create($attributes + ['user_id'=> $user_id]);

        return view('postConfirmation');
    }

    public function confirmStatus($id){
        $ticket= ticket_booking::findOrFail($id);
        $ticket->status = 'Sold';
        $ticket->save();

        return back();

    }

    public function denyStatus($id){
        $ticket= ticket_booking::findOrFail($id);
        $ticket->status = 'Open';
        $ticket->save();

        return back();

    }

}
