<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ticket_booking extends Model
{
    protected $table= 'ticket_booking';

    public $guarded= [];

    public function getData($info){

        // check filter


        if($info->from == null && $info->to == null && $info->route == null && $info->from == null){

            $data = DB::table('ticket_booking')->where('status', '=', 'open'
            )->orderBy('id')->get();
           return $data;
        }else{

            $info->validate([
                'from'=>['required'],
                'to'=>['required'],
                'route'=>['required'],
                'date'=>['required'],
            ]);

            $data = DB::table('ticket_booking')->where([
                ['from', '=', $info->from],
                ['to', '=', $info->to],
                ['status', '=', 'open'],
                ['route', '=', $info->route],
                ['date', '=', $info->date],
            ])->orderBy('id')->get();
            return $data;
        }
    }

    public function getTicketColumnValue($column){
        $data = DB::table('ticket_booking')->distinct()->pluck($column);

        return $data;
    }

    public function getPendingValue($id){
        $data= DB::table('ticket_booking')->where([
            ['user_id','=',$id],
            ['status','=','Pending']
        ])->orderBy('date')->get();

        return $data;
    }
}
