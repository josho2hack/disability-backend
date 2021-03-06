<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SubGroup extends Model
{
    protected $fillable = [
        'name','main_groups_id','icon','image','color'
    ];

    public function getImgAttribute()
    {
        return Storage::url($this->image);
    }

    public function assetCategories()
    {
        return $this->hasMany('App\AssetCategory','sub_groups_id');
    }

    public function mainGroup()
    {
        return $this->belongsTo('App\MainGroup','main_groups_id');
    }

    public function assets()
    {
        return $this->hasMany('App\Asset','sub_groups_id');
    }
}
