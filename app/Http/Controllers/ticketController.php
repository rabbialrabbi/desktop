<?php

namespace App\Http\Controllers;

use App\agency;
use App\user;
use App\route;
use App\city;
use App\ticket_booking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ticketController extends Controller
{


    public function index(ticket_booking $booking)
    {
       $router=  route::All();
//        dd($router->departureCity()->first()->name.
//        $router->arrivalCity()->first()->name
//            );
        $cities=  city::All();
        $agency=  agency::All();

        return view('home',[
            'router'=>$router,
            'cities'=>$cities,
            'agencies'=>$agency
        ]);
    }

    public function search(){
        $from_id = @city::where('name','=', $_POST['city_from'])->first()->id;
        $to_id = @city::where('name','=', $_POST['city_to'])->first()->id;

        if(!$from_id && !$to_id)
        {
            return back()->with('errorMessage', 'Both the City From and City To Location are Invalid');
        }
        elseif ($from_id && !$to_id)
        {
            return back()->with('errorMessage', 'The City you want to go currently not available.');
        }
        elseif (!$from_id && $to_id)
        {
            return back()->with('errorMessage', 'The City from you want to go currently not available.');
        }
        elseif($from_id == $to_id )
        {
            return back()->with('errorMessage', 'Both the City From and City To Location are same');
        }
        elseif (!$_POST['search_date'])
        {
            return redirect()->route("show.agency",['from_id'=>$from_id,'to_id'=>$to_id]);
        }
        else
            {
            $date = Carbon::create($_POST['search_date'])->format('Y-m-d');
            return redirect()->route("show.agency",['from_id'=>$from_id,'to_id'=>$to_id])->with('date',$date);
        }


//        if($_POST['city_from'] && $_POST['city_to'] && !$_POST['search_date']){
//            if($from_id != $to_id){
//                return redirect()->route("show.agency",['from_id'=>$from_id,'to_id'=>$to_id]);
//            }else{
//                return back()->with('errorMessage', 'Both the From location and To Location are same');
//            }
//            // edo send velue to
//        }else{
//            if($from_id != $to_id){
//                $date = Carbon::create($_POST['search_date'])->format('Y-m-d');
//                return redirect()->route("show.agencyFromSearch",['from_id'=>$from_id,'to_id'=>$to_id,'date'=>$date]);
//            }else{
//                return back()->with('errorMessage', 'Both the From location and To Location are same');
//            }
//
//        }
    }

    public function ticketDetails($id)
    {
        $ticket = ticket_booking::findOrFail($id);
        $client= User::findOrFail($ticket->user_id);

        return view('ticketDetails',[
            'ticket'=>$ticket,
            'client'=>$client]);
    }

    public function ticketConfirm($id)
    {
        $update= ticket_booking::findOrFail($id);
        $update->status= 'Pending';
        $update->save();

        return view('ConfirmMessage');
    }
}
