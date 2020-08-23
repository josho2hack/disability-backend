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
        return $this->belongsToMany('App\AssetCategory','asset_category_disabilities','asset_category_id','disability_type_id');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
