<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;
use App\SubGroup;
use App\MainGroup;
use App\AssetCategory;

class ObjectController extends Controller
{
    public function index(){

    	$data = [];
    	$asset = Asset::where('asset_statuses_id', 1)->get();
    	$asset_cate = AssetCategory::all();
    	$subgroup = SubGroup::all();

    	foreach($asset_cate as $assets){
    		$as = Asset::where(['asset_statuses_id' => 1, 'asset_categories_id' => $assets->id])->first();
    		if( $as != null ){
    			$data[$as->assetCategory->subGroup->name] = Asset::where(['asset_statuses_id' => 1, 'asset_categories_id' => $assets->id])->count();
    			
    		}
    	}
// dd($data['name']);
    	return view('object.index', compact('asset', 'subgroup', 'data'));
    }
}
