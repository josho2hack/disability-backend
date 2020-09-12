<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use SoftDeletes;

	protected $fillable = [
        'user_id', 'house_no', 'village_no', 'lane', 'sub_district',
        'district', 'province', 'postal_code', 'edu_place', 'tel'
    ];

	protected $guarded = [];
}
