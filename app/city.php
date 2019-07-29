<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $table = 'city';
    public $guarded =[];

    public function getData(){
        return $data = city::find(1);


    }
}
