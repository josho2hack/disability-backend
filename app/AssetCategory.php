<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssetCategory extends Model
{
    use SoftDeletes;

    public function assets() {
        return $this->hasMany(Asset::class);
    }

    public function assetCategoryDisabilities() {
        return $this->hasMany(AssetCategoryDisability::class);
    }

    public function disablilityTypes()
    {
        return $this->belongsToMany('App\DisabiltyType');
    }
}
