<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use SoftDeletes;

    public function assetMedias() {
        return $this->hasMany(AssetMedia::class);
    }

    public function assets()
    {
        return $this->belongsToMany('App\Asset');
    }
}
