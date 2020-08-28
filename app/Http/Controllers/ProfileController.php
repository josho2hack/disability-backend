<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;

class ProfileController extends Controller
{
    public function index(){

    	$user = User::where('id',\Auth::user()->id)->first();
    	$profile_address = Profile::where('user_id', $user->id)->first();

    	return view('profile.index', compact('user', 'profile_address'));
    }

    public function add(){
    	return view('profile.add');
    }

    public function insert(Request $request){
    	$request['user_id'] = \Auth::user()->id;
    	$profile = New Profile;
    	$profile->fill($request->all());

    	if( $profile->save() ) {
    		return redirect('profile');
    	}
    }
}
