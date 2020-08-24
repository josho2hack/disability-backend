<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DisabilityType extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'description'
    ];

    public function assetCategories()
    {
        return $this->belongsToMany('App\AssetCategory','asset_category_disability_types','asset_categories_id','disability_types_id');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
