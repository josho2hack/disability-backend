<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainGroup;
use App\SubGroup;
use App\AssetCategory;
use App\Pratice;

class PracticeController extends Controller
{
    public function index(){
    	$maingroup = MainGroup::get();
    	$subgroup = SubGroup::get();
    	$assetcategory = AssetCategory::get();

    	return view('practices.pratice', compact('maingroup','subgroup','assetcategory'));
    }



    public function add(Request $request){

    	$practice = New Pratice;
    	$practice->fill($request->all());

    	if( $practice->save() ){
    		return redirect('practice/index')->with('message', 'ลงทะเบียนเรียบร้อยแล้ว');
    	}
    	
    }

    public function home()
    {
    	$practice = Pratice::where('user_id', \Auth::user()->id)->get();

    	return view('practices.index', compact('practice'));
    }

    public function view($id)
    {
    	$practice = Pratice::where('id', $id)->first();

    	return view('practices.show', compact('practice'));
    }



    public function getsubgroup(Request $request)
    {
    	$sg = SubGroup::where('main_groups_id',$request->main_id)->get();
		$subgroup = "<option value=''>- กลุ่มย่อย -</option>";
		
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
