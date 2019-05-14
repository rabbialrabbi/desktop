<?php

namespace App\Http\Controllers;

use App\user;
use App\ticket_booking;
use Illuminate\Http\Request;

class ticketController extends Controller
{


    public function index(ticket_booking $booking)
    {
        $info= request();
        $data = $booking->getData($info);
        $fromValue= $booking->getTicketColumnValue('from');
        $toValue= $booking->getTicketColumnValue('to');

        return view('home',[
            'data'=>$data,
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
