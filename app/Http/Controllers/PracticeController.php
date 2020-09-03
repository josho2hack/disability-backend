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
}
