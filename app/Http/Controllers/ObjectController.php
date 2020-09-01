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
    	$asset_cate = AssetCategory::all();
    	$subgroup = SubGroup::all();

    	// foreach($asset_cate as $assets){
    	// 	$as = Asset::where(['asset_statuses_id' => 1, 'asset_categories_id' => $assets->id])->first();
    	// 	if( $as != null ){
    	// 		$data[$as->assetCategory->subGroup->name] = Asset::where(['asset_statuses_id' => 1, 'asset_categories_id' => $assets->id])->count();
    			
    	// 	}
    	// }

        foreach($asset_cate as $assets){

         $ass = Asset::where(['asset_statuses_id' => 1, 'asset_categories_id' => $assets->id])->first();
         $as = Asset::where(['asset_statuses_id' => 1, 'asset_categories_id' => $assets->id])->count();

         if( $ass != null ){
            // var_dump($as);
            $main_group_id = $ass->assetCategory->subGroup->mainGroup->id;
            $sub_group_name = $ass->assetCategory->subGroup->name;
            $sub_group_id = $ass->assetCategory->subGroup->id;
            $cate_name = $ass->assetCategory->name;
            $cate_id = $ass->assetCategory->id;

            $data[$main_group_id][$sub_group_name][$cate_name] = $as;
            
                $data['total'][$main_group_id][$sub_group_name] = array_sum($data[$main_group_id][$sub_group_name]);
                $data['image'][$main_group_id][$cate_name] = $ass->assetCategory->image; 
         }
        }

        $assetcount = Asset::where('asset_statuses_id', 1)->count();

    	return view('object.index', compact('data','assetcount'));
    }
}
