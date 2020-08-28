<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;

    protected $table = '';

    protected $fillable = [
        'user_id','event_category_id','event_group_id','title','description','cover_path','cover_name','cover_link'
    ];

	protected $guarded = [];
}
