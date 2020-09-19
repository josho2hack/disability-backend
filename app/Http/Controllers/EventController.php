<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use App\User;
use App\EventCategory;
use App\EventGroup;

class EventController extends Controller
{
    public function index(){
        $events = Events::all();

        return view('activity.index', compact('events'));
    }

    public function add(){
        $event_category = EventCategory::all();
        $event_group = EventGroup::all();
    	return view('activity.add', compact('event_category', 'event_group'));
    }

    public function insert(Request $request){
        $event = New Events;
        // $request['user_id'] = '1';
        $request['user_id'] = \Auth::user()->id;
        $request['event_category_id'] = '1';
        $request['event_group_id'] = '1';
        $filename = $request->upload->getClientOriginalName();
        $file = '/event/images/'. $filename;
        $request->upload->move(public_path('/event/images/'), $file);
        $request['cover_path'] = $file;
        $request['cover_name'] = $filename;
        $request['cover_link'] = $file;
        // $event->file_path = url($file);
        // dd($request);

        $event->fill($request->all());

    	if( $event->save() ) {
    		return redirect('activity');
    	}
    }
}
