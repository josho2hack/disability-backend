<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;

class ProfileController extends Controller
{
    public function index(){

    	$user = User::where('id',\Auth::user()->id)->get();

    	return view('profile.index', compact('user'));
    }

    public function add(){
    	return view('profile.add');
    }
}
