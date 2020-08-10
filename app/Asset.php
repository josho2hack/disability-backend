<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    public function assetMedias() {
        return $this->hasMany(AssetMedia::class);
    }

    public function assetCategories()
    {
        return $this->belongsTo('App\AssetCategory');
    }

    public function assetStatuses()
    {
        return $this->belongsTo('App\AssetStatus');
    }

    public function assets()
    {
        return $this->belongsToMany('App\Media');
    }
}
