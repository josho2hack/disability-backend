<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainGroup;
use App\SubGroup;

class ManualController extends Controller
{
    public function index(){
    	$subgroup = SubGroup::get();
    	
    	return view('manual', compact('subgroup'));
    }
}
