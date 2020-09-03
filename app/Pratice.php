<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pratice extends Model
{
	protected $guarded = [];


	public function cate()
    {
        return $this->belongsTo('App\AssetCategory','asset_categories_id');
    }

    public function main()
    {
        return $this->belongsTo('App\MainGroup','main_groups_id');
    }

    public function sub()
    {
        return $this->belongsTo('App\SubGroup','sub_groups_id');
    }

}
