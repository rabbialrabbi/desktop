<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class bus extends Model
{
    public function sits(){
        return $this->hasMany('App\sits');
    }
    public function agency(){
        return $this->belongsTo('App\agency');
    }
}
