<?php

namespace App;

use App\booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class seat extends Model
{

    protected $date = '';
    protected $time = '';

//Query for data of column
    public function getData($bus_id, $column = 'A')
    {

       $data= DB::table('seats')
           ->select(DB::raw('CONCAT(seats.column,seats.row) as name, id'))
           ->where([['bus_id', '=', $bus_id], ['column', '=', $column]])
           ->get();

       foreach ($data as $d){
            $status[]= $this->getStatus($d->id);
        }
        for($i = 0; $i<count($status);$i++){
            $data[$i]->status= $status[$i];
        }

        // ttips push object
        // push data to a object on create object details https://stackoverflow.com/questions/23916521/php-push-new-key-and-value-in-existing-object-array


        return $data ;
    }

    public function getStatus($id){
        $data = @DB::table('booking')->where([['seat_id','=',$id],['date','=',$this->date],['time','=',$this->time]])->first()->status;
        if($data == 'Booked'){
            return 'booked' ;
        }elseif($data == 'Pending'){
            return 'pending';
        }else{
            return 'Open';
        }
    }



// fetch the different column data and convert it to a single array
    public function getSeatDetails($bus_id, $date){
        $bus = bus::findOrFail($bus_id);

        // Collect date and time form the booking data
        $this->date = Carbon::create($date)->format('Y-m-d');
        $this->time = $bus->departure_time;

        // Collect seat details
        $columnA = $this->getData($bus_id, 'A');
        $columnB = $this->getData($bus_id, 'B');
        $columnC = $this->getData($bus_id, 'C');

        // for bus with seat column type 4
        if($bus->seats == 4){
            $columnD = $this->getData($bus_id, 'D');

            for ($i = 0; $i < COUNT($columnA); $i++) {
                $column[] = array('A' => $columnA[$i], 'B' => $columnB[$i], 'C' => $columnC[$i], 'D' => $columnD[$i]);
            }

            return $column ;
        }

        for ($i = 0; $i < COUNT($columnA); $i++) {
            $column[] = array('A' => $columnA[$i], 'B' => $columnB[$i], 'C' => $columnC[$i]);
        }

        return $column;


    }
}
