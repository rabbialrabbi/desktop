<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class bus extends Model
{
    public function seat(){
        return $this->hasMany('App\seat');
    }
    public function agency(){
        return $this->belongsTo('App\agency');
    }
    public function route(){
        return $this->belongsTo('App\route'); //edo Set foreign key
    }
}
