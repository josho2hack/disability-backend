<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Asset;

class Form01 extends Model
{
    use SoftDeletes;

   	protected $guarded = [];

	public function doc(){
		return $this->belongsTo('App\UserDocument','id');
	}

	public function substitute(){
		return $this->belongsTo('App\Substitute','substitute_id');
	}

	public function user(){
		return $this->belongsTo('App\User','user_id');
	}

	public function address(){
		return $this->hasOne(Profile::class,'user_id', 'user_id');
    }

    public function asset(){
		return $this->hasOne(Asset::class,'id','asset_id');
	}
}
