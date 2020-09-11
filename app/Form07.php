<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form07 extends Model
{
    protected $guarded = [];

    public function form01s(){
        return $this->hasMany('App\Form01','form07s_id');
    }
}
