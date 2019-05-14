<?php

namespace App\Http\Controllers;

use App\ticket_booking;
use App\user;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public  function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $users = user::all();
        $tickets = ticket_booking::All();
        return view('adminProfile',[
            'users'=>$users,
            'tickets'=>$tickets
        ]);
    }

    public function userview(ticket_booking $ticket_booking){
    $tickets = ticket_booking::All()->where('user_id', '=', auth()->id());
    $pendings = $ticket_booking->getPendingValue(auth()->id());
    return view('userProfile',[
        'tickets'=>$tickets,
        'pendings'=>$pendings
    ]);
    }

    public function userProfileShow($id){

        $user= user::findOrFail($id);
        return view('userProfileEdit', [
            'user'=>$user
        ]);

    }

    public function userProfileStore($id){

        request()->validate([
           'name'=>['required'],
           'email'=>['required'],
           'pass'=>['required'],
           'confirmPass'=>['required'],
        ]);
        if(request()->pass !== request()->confirmPass){

            return view('userProfileEdit',[
               'message'=> 'Confirm Password is not Correct',
            ]);
        }else{
            $user= user::findOrFail($id);
            $user->name= request()->name;
            $user->email= request()->email;
            $user->password= bcrypt(request()->pass);
            $user->save();
            return back();
        }



    }

    public function deleteUser($id){

        user::findOrFail($id)->delete();

        return view('userDeleteConfirmation');

    }





}
