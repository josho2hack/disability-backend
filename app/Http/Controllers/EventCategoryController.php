<?php

namespace App\Http\Controllers;

use App\EventCategory;
use Illuminate\Http\Request;

class EventCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventcategories = EventCategory::all();
        return view('eventcategories.index', compact('eventcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventcategories.create');
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
            'name' => 'required',
            'description' => 'required',
            'color' => 'required'
        ]);

        $input = $request->all();

        EventCategory::create($input);
        return redirect()->route('eventcategories.index')->with('success', 'บันทึกข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventCategory  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eventcategory = EventCategory::findOrFail($id);
        return view('eventcategories.show', compact('eventcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EventCategory  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eventcategory = EventCategory::find($id);
        return view('eventcategories.edit', compact('eventcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EventCategory  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $eventcategory = EventCategory::find($id);
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'color' => 'required'
        ]);

        $input = $request->all();

        $eventcategory->update($input);
        return redirect()->route('eventcategories.index')->with('success', 'ปรับปรุงอมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EventCategory  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventcategory = EventCategory::find($id);
        $eventcategory->delete();
        return redirect()->route('eventcategories.index')->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}
