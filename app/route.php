<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class route extends Model
{
    public function bus(){
        return $this->belongsTo('App\bus');
    }

    public function city(){
        return $this->hasMany('App\city');
    }
}
