<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;
use Redirect,Response;

class FullCalendarUserController extends Controller
{
    public function index()
    {
        return view('fullcalendar');
    }

    public function show()
    {
         $data = Events::all();
         return Response::json($data);
    }

    public function update(Request $request)
    {
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,'start' => $request->start, 'end' => $request->end];
        $event  = Events::where($where)->update($updateArr);

        return Response::json($event);
    }
}
