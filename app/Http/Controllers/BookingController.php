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
use Carbon\Carbon;


class BookingController extends Controller
{
    protected $search_date = '';
    public function __construct()
    {
        $this->middleware('auth')->except(['showAgency','showBus','showSeat','booking','confirmBooking','error']);
    }

    public function showAgency($from_id, $to_id)
    {
        if(session('date')){
            $this->search_date = session('date');
        }

        $route_id= @route::where(['departure_id'=>$from_id, 'arrival_id'=>$to_id])->first();

        $destination_from=city::findOrFail($from_id);
        $destination_to=city::findOrFail($to_id);

        if(!$route_id){

            $msg = "This route is not available yet.";
            return redirect("/bookingError/{$msg}");

        }else{

            $find_buses = DB::table('buses')->select(DB::raw('count(id) as bus_count, agency_id'))->where('route_id','=',$route_id->id)->groupBy('agency_id')->get();

            if(!$find_buses->first()){

                $msg = "No agency available yet. Please select from below.";
                return redirect("/bookingError/{$msg}");

            }else{

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
                    'route_info'=>$route_id,
                    'date'=>$this->search_date

                ]);
            }
        }
    }



    public function showBus(){

        if(@$_GET['agency_id'] && @$_GET['route_id']){
            $bus_list=  bus::with('agency','seat')->where(['agency_id'=>$_GET['agency_id'], 'route_id'=>$_GET['route_id']])->get();
        }else{
            $bus_list=  bus::with('agency','seat','route')->where(['agency_id'=>$_GET['agencyId']])->get();
        }


        $date = carbon::create($_GET['date'])->toDateString();


           return view('busDetails',['buses'=>$bus_list, 'booking_date'=>$date]);


    }

    public function showSeat($bus_id, $booking_date , seat $seat)
    {


        $bus = bus::findOrFail($bus_id);
        $columns = $seat->getSeatDetails($bus_id, $booking_date);
        $date = carbon::create($booking_date)->format('Y-m-d');

        return view('seatDetails',[
            'columns'=>$columns,
            'bus' =>$bus,
            'booking_date'=>$date,
            ]);
    }

    public function confirmBooking(){

        $seat_name = [
            'seat_A1','seat_A2','seat_A3','seat_A4','seat_A5','seat_A6','seat_A7','seat_A8','seat_A9','seat_A10',
            'seat_B1','seat_B2','seat_B3','seat_B4','seat_B5','seat_B6','seat_B7','seat_B8','seat_B9','seat_B10',
            'seat_C1','seat_C2','seat_C3','seat_C4','seat_C5','seat_C6','seat_C7','seat_C8','seat_C9','seat_C10',
            'seat_D1','seat_D2','seat_D3','seat_D4','seat_D5','seat_D6','seat_D7','seat_D8','seat_D9','seat_D10'
            ];

        foreach ($_POST as $key=>$value){

            if(in_array($key, $seat_name)){

                $booking = new booking();

                $booking->route_id = $_POST['route_id'];
                $booking->bus_id= $_POST['bus_id'];
                $booking->seat_id= $_POST[$key];
                $booking->date = $_POST['date'];
                $booking->time = $_POST['time'];
                $booking->fare = $_POST['fare'];
                $booking->status = 'Pending';
                $booking->save();

            }
        }

        return back();



/*
// ttips array to object convert
        foreach ($_POST as $key=>$value){

            if(in_array($key, $seat_name)){
                $d[] = ['date'=>$_POST['date'], 'time'=>$_POST['time']];

            }
        }

        $object = json_decode(json_encode($d)) ;

       foreach ($object as $data){
          echo $data->date ."<br/>";
       }
*/
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

    public function error($msg){

        return view('error.bookingError',[
            'errorMessage'=>$msg
        ]);

    }

}
