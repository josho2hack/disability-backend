<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;
use App\SubGroup;
use App\MainGroup;
use App\AssetCategory;
use App\AssetCategoryDisabilityType;

class ObjectController extends Controller
{
    public function index(){

        if(empty(\Auth::user()->disability_type_id)){
            return redirect('/');
        }

    	$data = [];
    	$asset_cate = AssetCategory::all();
    	$subgroup = SubGroup::all();
        $disability_types = \Auth::user()->disability_type_id;
        $disability = AssetCategoryDisabilityType::where('disability_types_id', $disability_types)->get();

        foreach($disability as $assets){

         $ass = Asset::where(['asset_statuses_id' => 1, 'asset_categories_id' => $assets->asset_categories_id])->first();
         $as = Asset::where(['asset_statuses_id' => 1, 'asset_categories_id' => $assets->asset_categories_id])->count();

         if( $ass != null ){
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

        $main1 = empty($data['total']['1']) ? 0 : array_sum($data['total']['1']);
        $main2 = empty($data['total']['2']) ? 0 : array_sum($data['total']['2']);

        $data['sum'] = $main1 + $main2;

        $assetcount = Asset::where('asset_statuses_id', 1)->count();
        
    	return view('object.index', compact('data','assetcount'));
    }
}
