<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form09 extends Model
{
    protected $guarded = [];

    public function form01s(){
        return $this->hasMany('App\Form01','form09s_id');
    }
}
