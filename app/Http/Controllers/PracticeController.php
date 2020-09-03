<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainGroup;
use App\SubGroup;
use App\AssetCategory;

class PracticeController extends Controller
{
    public function index(){
    	$maingroup = MainGroup::get();
    	$subgroup = SubGroup::get();
    	$assetcategory = AssetCategory::get();

    	return view('pratice', compact('maingroup','subgroup','assetcategory'));
    }

    public function add(Request $request){

    	return redirect('practice')->with('message', 'ลงทะเบียนเรียบร้อยแล้ว');
    }



    public function getsubgroup(Request $request)
    {
    	$sg = SubGroup::where('main_groups_id',$request->main_id)->get();
		$subgroup = "<option value=''>- เลือก -</option>";
		
		foreach( $sg as $sub ){
			$subgroup .= "<option value='{$sub->id}'>{$sub->name}</option>";
		}

    	return $subgroup;
    }

    public function getcategory(Request $request)
    {
    	$category = AssetCategory::where('sub_groups_id',$request->sub_id)->get();
		$categories = "<option value=''>- เลือก -</option>";
		
		foreach( $category as $cate ){
			$categories .= "<option value='{$cate->id}'>{$cate->name}</option>";
		}

    	return $categories;
    }
}
