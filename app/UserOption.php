<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOption extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'gender', 'avatar_name', 'avatar_path', 'citizen_id','pwd_id',
        'timezone','verify','created_at','updated_at'
    ];
}
