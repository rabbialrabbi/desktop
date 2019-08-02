<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class route extends Model
{
    public function bus(){
        return $this->belongsTo('App\bus');
    }

    public function departureCity(){
        return $this->belongsTo('App\city','departure_id', 'id');
    }

    public function arrivalCity(){
        return $this->belongsTo('App\city','arrival_id', 'id');
    }

}
