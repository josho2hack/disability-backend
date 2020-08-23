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

    public function disablilityTypes()
    {
        return $this->belongsToMany('App\DisabilityType','asset_category_disabilities','asset_category_id','disability_type_id');
    }
}
