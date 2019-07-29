<?php

namespace App\Http\Controllers;

use App\user;
use App\city;
use App\ticket_booking;
use Illuminate\Http\Request;

class ticketController extends Controller
{


    public function index(ticket_booking $booking, city $city)
    {
        $info= request();
        $data = $booking->getData($info);
        $cities = $city->getData();
        $fromValue= $booking->getTicketColumnValue('from');
        $toValue= $booking->getTicketColumnValue('to');

        return view('home',[
            'data'=>$data,
            'city'=>$cities,
            'fromValue'=>$fromValue,
            'toValue'=>$toValue
        ]);
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
