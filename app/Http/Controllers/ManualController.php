<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maingroup;
use App\Subgroup;

class ManualController extends Controller
{
    public function index(){
    	$subgroup = Subgroup::get();
    	
    	return view('manual', compact('subgroup'));
    }
}
