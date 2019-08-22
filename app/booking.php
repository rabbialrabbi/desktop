<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    public $table = 'booking';

    public function seat(){
        $this->belongsTo('App\seat');
    }

}
