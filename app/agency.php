<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class agency extends Model
{
    public $guarded = [];
    public $table= 'agency';
    public function bus(){
        return $this->hasMany('App\bus');
    }
}
