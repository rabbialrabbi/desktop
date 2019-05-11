<?php

namespace App\Http\Controllers;

use App\ticket_booking;
use App\user;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $users = user::all();
        $tickets = ticket_booking::All();
        return view('adminProfile',[
            'users'=>$users,
            'tickets'=>$tickets
        ]);
    }

    public function userview($id){
        $tickets = ticket_booking::All()->where('user_id', '=', $id);
        return view('userProfile',[
            'tickets'=>$tickets
        ]);
    }
}
