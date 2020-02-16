<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    public $table = 'booking';

    public function seat(){
        $this->belongsTo('App\seat');
    }

    public function getData($agency,$month){

        //row data from scratch.

//        $dataset = booking::where([['agency_id','=',$agency]])
//            ->whereBetween('date',['2020-'.$month.'-01','2020-'.$month.'-30'])->get();
//        foreach ($dataset as $data){
//            $i[] = ['date'=>$data->date,'fare'=>$data->fare];
//        }
//        $i2 = collect($i)->mapToGroups(function ($item){
//           return [$item['date']=>$item['fare']];
//        })->map(function ($item){
//            return $item->sum();
//        });

        $dataset = booking::where([['agency_id','=',$agency]])
            ->whereBetween('date',['2020-'.$month.'-01','2020-'.$month.'-30'])->get()
            ->mapToGroups(function ($item){
                return [Carbon::parse($item->date)->format('d') => $item->fare];
            })->map(function($item){
                return $item->sum();
            });


        return $dataset;
    }

}

