<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    public function assetCategory()
    {
        return $this->belongsTo('App\AssetCategory');
    }

    public function assetStatus()
    {
        return $this->belongsTo('App\AssetStatus');
    }

    public function medias()
    {
        return $this->belongsToMany('App\Media');
    }
}
