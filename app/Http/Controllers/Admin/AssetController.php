<?php

namespace App\Http\Controllers\Admin;

use App\Asset;
use App\AssetCategory;
use App\AssetStatus;
use App\Http\Controllers\Controller;
use App\SubGroup;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function dashboard(){
        return view('admin.assets.dashboard');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assets = Asset::with('assetstatus')->get();
        return view('admin.assets.index',compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cates = AssetCategory::all();
        $statuses = AssetStatus::all();
        return view('admin.assets.create',compact('cates'),compact('statuses'));
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
            'code' => 'required',
            'asset_categories_id' => 'required',
            'asset_statuses_id' => 'required'
        ]);

        Asset::create($request->all());

        //$request->session()->flash('status', 'บันทึกข้อมูลเรียบร้อยแล้ว');
        return redirect()->route('assets.index')->with('success', 'บันทึกข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asset = Asset::with('assetCategory','assetStatus','medias')->findOrFail($id);
        $cate = AssetCategory::with('disablilityTypes')->findOrFail($asset->assetCategory->id);
        $subgroup = SubGroup::with('maingroup')->findOrFail($asset->assetCategory->id);
        $asset['cate'] = $cate;
        return view('admin.assets.show', compact('asset'),compact('subgroup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asset = Asset::with('assetcategory','assetstatus','medias')->find($id);
        $cates = AssetCategory::all();
        $statuses = AssetStatus::all();
        $asset['cates'] = $cates;
        $asset['statuses'] = $statuses;
        return view('admin.assets.edit', compact('asset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $asset = Asset::find($id);
        $request->validate([
            'code' => 'required',
            'asset_categories_id' => 'required',
            'asset_statuses_id' => 'required'
        ]);

        $asset->update($request->all());
        return redirect()->route('assets.index')->with('success', 'ปรับปรุงอมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asset = Asset::find($id);
        $asset->delete();
        return redirect()->route('assets.index')->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}
