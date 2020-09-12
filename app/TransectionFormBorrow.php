<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransectionFormBorrow extends Model
{
	protected $guarded = [];
    
    public function borrow_single()
    {
		return $this->belongsTo('App\Form01','form_id');
    }
}
