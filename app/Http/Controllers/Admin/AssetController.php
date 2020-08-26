<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index(){
        return view('admin.assets.dashboard');
    }

    public function list(){
        return view('admin.assets.list');
    }
}
