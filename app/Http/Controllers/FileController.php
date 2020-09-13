<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\User;

class FileController extends Controller
{
    public function index(){
        $files = File::all();

        return view('fileupload.index', compact('files'));
    }

    public function show(){
        $files = File::all();

        return view('fileupload.show', compact('files'));
    }

    public function add(){
    	return view('fileupload.add');
    }

    public function insert(Request $request){
        $file_ = New File;
        // $request['user_id'] = '1';
        $request['user_id'] = \Auth::user()->id;
        $filename = $request->upload->getClientOriginalName();
        $file = '/files/images/'. $filename;
        $request->upload->move(public_path('/files/images/'), $file);
        $request['cover_path'] = $file;
        $request['cover_name'] = $filename;
        $request['cover_link'] = $file;
        // $event->file_path = url($file);
        // dd($request);

        $file_->fill($request->all());

    	if( $file_->save() ) {
    		return redirect('fileupload');
    	}
    }
}
