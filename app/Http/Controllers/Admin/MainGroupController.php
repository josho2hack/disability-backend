<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\MainGroup;
use App\SubGroup;
use Illuminate\Http\Request;

class MainGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maingroups = SubGroup::all();
        return view('admin.maingroups.index', compact('maingroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.maingroups.create');
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
            'main_groups_id' => 'required'
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {

            // Get the file from the request store to disk
            $path = $request->image->store('public/maingroup');
            dd($path);

            // Get the path of the file
            $input['image'] = $path;
        }

        SubGroup::create($input);

        //$request->session()->flash('status', 'บันทึกข้อมูลเรียบร้อยแล้ว');
        return redirect()->route('maingroups.index')->with('success', 'บันทึกข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubGroup  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maingroup = SubGroup::with('maingroup')->findOrFail($id);
        return view('admin.maingroups.show', compact('maingroup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubGroup  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maingroup = SubGroup::find($id);
        return view('admin.maingroups.edit', compact('maingroup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubGroup  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $maingroup = SubGroup::find($id);
        $request->validate([
            'name' => 'required'
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {

            // Get the file from the request store to disk
            $path = $request->image->store('public/maingroup');

            // Get the path of the file
            $input['image'] = $path;
        }

        $maingroup->update($input);
        return redirect()->route('maingroups.index')->with('success', 'ปรับปรุงอมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubGroup  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maingroup = SubGroup::find($id);
        $maingroup->delete();
        return redirect()->route('maingroups.index')->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}
