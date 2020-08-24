<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainGroup extends Model
{
    protected $fillable = [
        'name'
    ];

    public function subGroup()
    {
        return $this->hasMany('App\SubGroup','main_groups_id');
    }
}
