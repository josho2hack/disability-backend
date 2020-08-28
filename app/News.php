<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;

    protected $table = 'news';

    protected $fillable = [
        'user_id','news_category_id','news_group_id','title','description','cover_path','cover_name','cover_link'
    ];

	protected $guarded = [];
}
