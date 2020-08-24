<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use SoftDeletes;

    public function assets()
    {
        return $this->belongsToMany('App\Asset','asset_media','assets_id','media_id');
    }
}
