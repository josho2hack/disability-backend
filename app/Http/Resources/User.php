<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\User as UserModel;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'email_verified_at' => $this->email_verified_at,
            'username' => $this->username,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'gender' => $this->gender,
            'avatar_name' => $this->avatar_name,
            'avatar_path' => $this->avatar_path,
            'citizen_id' => $this->citizen_id,
            'timezone' => $this->timezone,
            'active' => $this->active,
            'last_login_at' => $this->last_login_at,
            'last_login_ip' => $this->last_login_ip,
            'to_be_logged_out' => $this->to_be_logged_out,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'confirmed_at' => $this->confirmed_at,
            'confirmation_code' => $this->confirmation_code,
            'roles' => $this->roles
        ];
    }
}
