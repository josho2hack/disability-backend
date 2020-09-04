<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class AssetCategory extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'for_give',
        'image','sub_groups_id','url','document'
    ];

    public function getDocAttribute()
    {
        return Storage::url($this->document);
    }

    public function assets() {
        return $this->hasMany('App\Asset','asset_categories_id');
    }

    public function disablilityTypes()
    {
        return $this->belongsToMany('App\DisabilityType','asset_category_disability_types','asset_categories_id','disability_types_id');
    }

    public function subGroup()
    {
        return $this->belongsTo('App\SubGroup','sub_groups_id');
    }
}
