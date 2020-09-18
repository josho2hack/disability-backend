<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::all();
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start' => 'required',
            'end' => 'required',
            'office' => 'required',
            'city' => 'required',
            'event_category_id' => 'required',
        ]);

        $input = $request->all();

        Events::create($input);
        return redirect()->route('events.index')->with('success', 'บันทึกข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Events  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Events::with('event_category')->findOrFail($id);
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Events  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Events::with('event_category')->findOrFail($id);
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Events  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Events::find($id);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start' => 'required',
            'end' => 'required',
            'office' => 'required',
            'city' => 'required',
            'event_category_id' => 'required',
        ]);

        $input = $request->all();

        $event->update($input);
        return redirect()->route('events.index')->with('success', 'ปรับปรุงอมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Events  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Events::find($id);
        $event->delete();
        return redirect()->route('events.index')->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}
