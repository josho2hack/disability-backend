<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\User;

class NewsController extends Controller
{
    public function index(){
        // $news = News::all();

        // return view('news.index', compact('news'));
        return view('news.index');
    }

    public function add(){
    	return view('news.add');
    }

    public function insert(Request $request){
        $news = New News;
        // $request['user_id'] = '1';
        // dd($request);
        $request['user_id'] = \Auth::user()->id;
        $request['news_category_id'] = '1';
        $request['news_group_id'] = '1';
        $filename = $request->upload->getClientOriginalName();
        $file = '/news/images/'. $filename;
        $request->upload->move(public_path('/news/images/'), $file);
        $request['cover_path'] = $file;
        $request['cover_name'] = $filename;
        $request['cover_link'] = $file;
        // $event->file_path = url($file);
        // dd($request);

        $news->fill($request->all());

    	if( $news->save() ) {
    		return redirect('news');
    	}
    }
}
