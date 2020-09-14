<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventCategory extends Model
{
    use SoftDeletes;

    protected $table = 'event_categories';

    protected $fillable = [
        'name','description','color'
    ];

    protected $guarded = [];

    public function events(){
        return $this->hasMany('App\Events');
    }
}
