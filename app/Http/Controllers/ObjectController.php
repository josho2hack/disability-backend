<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;

class ObjectController extends Controller
{
    public function index(){

    	$asset = Asset::where('asset_statuses_id', 1)->get();

    	return view('object.index', compact('asset'));
    }
}
