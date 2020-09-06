<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User', 'role_users', 'roles_id', 'users_id');
    }

    protected $fillable = [
        'name', 'created_at','updated_at'
    ];
}
