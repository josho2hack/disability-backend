<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{

    protected $fillable = [
        'code', 'received_date', 'version', 'serial_no', 'spec',
        'usability', 'attribute', 'description', 'url', 'doc_no', 'budget','price',
        'out_stock_evidance', 'waranty_start', 'waranty_end', 'remark', 'image','location'
    ];

    public function assetCategory()
    {
        return $this->belongsTo('App\AssetCategory');
    }

    public function assetStatus()
    {
        return $this->belongsTo('App\AssetStatus');
    }

    public function medias()
    {
        return $this->belongsToMany('App\Media');
    }
}
