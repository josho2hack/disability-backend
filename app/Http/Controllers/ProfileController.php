<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;
use App\DisabilityType;

class ProfileController extends Controller
{
    public function index(){

    	$user = User::where('id',\Auth::user()->id)->first();
    	$profile_address = Profile::where('user_id', $user->id)->first();
    	return view('profile.index', compact('user', 'profile_address'));
    }


    public function edit_profile(){

        $user = User::where('id',\Auth::user()->id)->first();
        $disability = DisabilityType::get();

    	return view('profile.edit', compact('user', 'disability'));
    }

    public function update_profile(Request $request){

        $update = User::find(\Auth::user()->id);
        $update->first_name = $request->first_name;
        $update->last_name = $request->last_name;
        $update->gender = $request->gender;
        $update->disability_type_id = $request->disability_type_id;

        if ( $update->save() ){
            return redirect('profile');
        }
    }

    public function address(){

    	return view('profile.add');
    }

    public function insert_address(Request $request){

    	$request['user_id'] = \Auth::user()->id;
    	$profile = New Profile;
    	$profile->fill($request->all());

    	if( $profile->save() ) {
    		return redirect('profile');
    	}
    }

    public function edit_address(){
        $address = Profile::where('user_id', \Auth::user()->id)->first();

        return view('profile.edit_address', compact('address'));
    }

    public function update_address(Request $request){
        $request['user_id'] = \Auth::user()->id;
        $update = Profile::find($request->id);
        $update->fill($request->all());

        if( $update->save() ){
            return redirect('profile');
        }
    }
}
