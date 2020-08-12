<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User', 'role_users', 'users_id', 'roles_id');
    }

    protected $fillable = [
        'name', 'created_at','updated_at'
    ];
}
