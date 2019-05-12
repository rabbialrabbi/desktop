<?php

namespace App\Http\Controllers;

use App\User;
use App\booking;
use App\ticket_booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function show($id)
    {
        $ticket = ticket_booking::findOrFail($id);
        $client= User::findOrFail($ticket->user_id);

        return view('ticketDetails',[
            'ticket'=>$ticket,
            'client'=>$client]);
    }

    public function update($id)
    {
        $update= ticket_booking::findOrFail($id);
        $update->status= 'Pending';
        $update->save();

        return redirect('/');
    }
}
