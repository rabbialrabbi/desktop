<?php

namespace App\Http\Controllers;

use App\User;
use App\booking;
use App\ticket_booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    public function show($id)
    {
        $ticket = ticket_booking::findOrFail($id);
        $client= User::findOrFail($ticket->user_id);

        return view('ticketDetails',[
            'ticket'=>$ticket,
            'client'=>$client]);
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
