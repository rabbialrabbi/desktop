<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sits extends Model
{
    public function bus(){
        return $this->belongsTo('App\bus');
    }
}
