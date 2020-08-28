<?php

namespace App\Http\Controllers\Admin;

use App\AssetCategory;
use App\Http\Controllers\Controller;
use App\SubGroup;
use Illuminate\Http\Request;

use finfo;

class SubGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subgroups = AssetCategory::with('subgroup')->get();
        return view('admin.subgroups.index', compact('subgroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maingroups = SubGroup::all();
        return view('admin.subgroups.create', compact('maingroups'));
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
            'for_give' => 'required',
            'sub_groups_id' => 'required'
        ]);

        if ($request->hasFile('image')) {
            // Get the file from the request
            $file = $request->file('image');

            // Get the contents of the file
            $contents = $file->openFile()->fread($file->getSize());
            $request['image'] = $contents;
        }


        AssetCategory::create($request->all());
        return redirect()->route('subgroups.index')->with('success', 'บันทึกข้อมูลเรียบร้อยแล้ว');
    }

    public function avatar($id){
        $subgroup = AssetCategory::find($id);
        return response()->make($subgroup->image, 200, array(
            'Content-Type' => (new finfo(FILEINFO_MIME))->buffer($subgroup->image)
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AssetCategory  $assetCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subgroup = AssetCategory::with('subgroup')->find($id);
        $subgroupR = SubGroup::with('maingroup')->find($subgroup->subgroup->id);
        $subgroup['type'] = $subgroupR->maingroup->name;
        return view('admin.subgroups.show', compact('subgroup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AssetCategory  $assetCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maingroups = SubGroup::all();
        $subgroup = AssetCategory::with('subgroup')->find($id);
        return view('admin.subgroups.edit', compact('subgroup'),compact('maingroups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AssetCategory  $assetCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subgoup = AssetCategory::find($id);
        $request->validate([
            'name' => 'required',
            'for_give' => 'required',
            'sub_groups_id' => 'required'
        ]);

        if ($request->hasFile('image')) {
            // Get the file from the request
            $file = $request->file('image');

            // Get the contents of the file
            $contents = $file->openFile()->fread($file->getSize());
            $request['image'] = $contents;
        }

        $subgoup->update($request->all());
        return redirect()->route('subgroups.index')->with('success', 'ปรับปรุงอมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AssetCategory  $assetCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subgoup = AssetCategory::find($id);
        $subgoup->delete();
        return redirect()->route('subgroups.index')->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}
