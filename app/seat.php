<?php

namespace App;

use App\booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class seat extends Model
{


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

        // push data to a object on create object details https://stackoverflow.com/questions/23916521/php-push-new-key-and-value-in-existing-object-array


        return $data ;
    }

    public function getStatus($id){
        $data = @DB::table('booking')->where('seat_id','=',$id)->first()->status;
        if($data == 'Booked'){
            return 'booked' ;
        }elseif($data == 'Pending'){
            return 'pending';
        }else{
            return 'Open';
        }
    }



// fetch the different column data and convert it to a single array
    public function getSeatDetails($bus_id){

        $bus = bus::findOrFail($bus_id);

        $columnA = $this->getData($bus_id, 'A');
        $columnB = $this->getData($bus_id, 'B');
        $columnC = $this->getData($bus_id, 'C');

        // for seat column type 4
        if($bus->seats == 4){
            $columnD = $this->getData($bus_id, 'D');

            for ($i = 0; $i < COUNT($columnA); $i++) {
                $column[] = array('A' => $columnA[$i], 'B' => $columnB[$i], 'C' => $columnC[$i], 'D' => $columnD[$i]);
            }

            return $column ;
            exit();
        }

        for ($i = 0; $i < COUNT($columnA); $i++) {
            $column[] = array('A' => $columnA[$i], 'B' => $columnB[$i], 'C' => $columnC[$i]);
        }

        return $column;


    }
}
