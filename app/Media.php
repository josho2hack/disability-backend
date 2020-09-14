<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','description','file_path','file_name','file_ext'
    ];

    public function assets()
    {
        return $this->belongsToMany('App\Asset','asset_media','assets_id','media_id');
    }

    public function events()
    {
        return $this->belongsToMany('App\Events');
    }
}
