<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Asset;

class Form01 extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'audit_date','approve_date','form07s_id','form09s_id','form10s_id','form05s_id','form13s_id','doc_notifies_id'
        ,'doc_contracts_id','doc_garuntee_id'
    ];

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

	public function asset(){
		return $this->belongsTo('App\Asset', 'asset_id');
	}
}
