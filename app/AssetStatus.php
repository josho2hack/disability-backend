<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssetStatus extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','description',
    ];

    public function assets() {
        return $this->hasMany(Asset::class,'asset_statuses_id');
    }
}
