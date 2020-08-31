<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class FormBorrow extends Model
{
    use SoftDeletes;
	
	protected $guarded = [];

	public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function address()
    {
        return $this->hasOne(Profile::class, 'user_id', 'user_id');
    }

    public function substitute()
    {
        return $this->hasOne(Substitute::class, 'id', 'substitute_id');
    }
}
