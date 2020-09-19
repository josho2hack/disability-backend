<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Events extends Model
{
    use SoftDeletes;

    protected $table = 'events';

    protected $guarded = [];

    public function event_category(){
        return $this->belongsTo('App\EventCategory');
    }

    public function medias()
    {
        return $this->belongsToMany('App\Media');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
