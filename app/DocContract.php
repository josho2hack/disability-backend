<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocContract extends Model
{
    protected $guarded = [];

    public function form01s(){
        return $this->hasMany('App\Form01','doc_contracts_id');
    }
}
