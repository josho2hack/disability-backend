<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form10 extends Model
{
    protected $guarded = [];

    public function form01s(){
        return $this->hasMany('App\Form01','form10s_id');
    }
}
