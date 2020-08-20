<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DisabilityType extends Model
{
    use SoftDeletes;

    public function assetCategories()
    {
        return $this->belongsToMany('App\AssetCategory');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
