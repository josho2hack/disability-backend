<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DisabilityType extends Model
{
    use SoftDeletes;

    public function assetCategoryDisabilities()
    {
        return $this->hasMany(AssetCategoryDisability::class);
    }

    public function assetCategories()
    {
        return $this->belongsToMany('App\AssetCategory');
    }
}
