<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form13 extends Model
{
    protected $guarded = [];

    public function form01s(){
        return $this->hasMany('App\Form01','form01s_id');
    }
}
