<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{

    protected $fillable = [
        'code', 'received_date', 'version', 'serial_no', 'spec',
        'usability', 'attribute', 'description', 'url', 'doc_no', 'budget','price',
        'out_stock_evidance', 'waranty_start', 'waranty_end', 'remark', 'image','location',
        'asset_statuses_id','asset_categories_id','sub_groups_id'
    ];

    public function assetCategory()
    {
        return $this->belongsTo('App\AssetCategory','asset_categories_id');
    }

    public function assetStatus()
    {
        return $this->belongsTo('App\AssetStatus','asset_statuses_id');
    }

    public function assetSubGroups()
    {
        return $this->belongsTo('App\SubGroup','sub_groups_id');
    }

    public function medias()
    {
        return $this->belongsToMany('App\Media','asset_media','assets_id','media_id');
    }
}
