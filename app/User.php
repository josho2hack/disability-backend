<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'email', 'email_verified_at', 'password',
        'first_name', 'last_name', 'gender', 'avatar_name', 'avatar_path', 'citizen_id','pwd_id',
        'timezone', 'active', 'last_login_at', 'last_login_ip', 'to_be_logged_out', 'created_at',
        'updated_at','disability_types_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullNameAttribute(){
        return $this->first_name ." " . $this->last_name;
    }

    public function disabilityType()
    {
        return $this->belongsTo('App\DisabilityType');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'role_users', 'users_id', 'roles_id');
    }

    public function role()
    {
        return $this->roles()->first();
    }

    public function isAdmin()
    {
        return $this->roles()->where('name', 'Admin')->exists();
    }

    public function isAudit()
    {
        return $this->roles()->where('name', 'Audit')->exists();
    }

    public function isApprove()
    {
        return $this->roles()->where('name', 'Approve')->exists();
    }



    // public function sendEmailVerificationNotification()
    // {
    //     $this->notify(new \App\Notifications\CustomVerifyEmail);
    // }

    public function sendApiEmailVerificationNotification()
    {
        $this->notify(new \App\Notifications\VerifyApiEmail); // my notification
    }
}
