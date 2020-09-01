<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Substitute;


class SubstituteController extends Controller
{
    public function index(){

    	$substitute = Substitute::where('user_id',\Auth::user()->id)->get();
        $check = Substitute::where('user_id',\Auth::user()->id)->count();
    	
    	if ($substitute->isEmpty()) {
    		return redirect('substitute/create');
    	}

    	return view('substitutes.index', compact('substitute', 'check'));
    }

    public function create(){
        $check = Substitute::where('user_id',\Auth::user()->id)->count();
        if ($check >= 2) {
            return redirect()->back();
        }
    	return view('substitutes.create');
    }

    public function store(Request $request)
    {
    	$request['user_id'] = \Auth::user()->id;
    	unset($request['_token']);

    	$substitute = New Substitute;
    	$substitute->fill($request->all());

    	if ( $substitute->save() ) {
    		return redirect('substitute');
    	} 
    }

    public function edit($id){
        $substitute = Substitute::find($id);
        
        return view('substitutes.edit', compact('substitute'));
    }

    public function update(Request $request, $id){
        $update = Substitute::find($id);
        $update->fill($request->all());

        if ( $update->save() ) {
            return redirect('substitute');
        }
    }
}
