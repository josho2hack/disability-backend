<?php

namespace App\Http\Controllers\Admin;

use App\Asset;
use App\AssetCategory;
use App\AssetStatus;
use App\DisabilityType;
use App\Http\Controllers\Controller;
use App\MainGroup;
use App\SubGroup;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function dashboard(){
        $assetcount = Asset::all()->count();
        $sub1 = SubGroup::with('assetCategories','assets')->where('main_groups_id','1')->get();
        $sub2 = SubGroup::with('assetCategories','assets')->where('main_groups_id','2')->get();
        return view('admin.assets.dashboard',compact('assetcount','sub1','sub2'));
    }

    public function selected($cate){
        $assets = Asset::with('assetStatus')->where('asset_categories_id',$cate)->get();
        return view('admin.assets.index',compact('assets'));
    }

    public function subselected($sub){
        $assets = Asset::with('assetStatus')->where('sub_groups_id',$sub)->get();
        return view('admin.assets.index',compact('assets'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assets = Asset::with('assetStatus')->get();
        return view('admin.assets.index',compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mains = SubGroup::with('assetCategories')->get();
        $statuses = AssetStatus::all();
        return view('admin.assets.create',compact('mains'),compact('statuses'));
    }

    // Fetch records
    public function getCates($id=1){

    	// Fetch Employees by Departmentid
        $cateData['data'] = AssetCategory::orderby("name","asc")
        			->select('id','name')
        			->where('sub_groups_id',$id)
        			->get();

        return response()->json($cateData);

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
        $asset = Asset::with('assetCategory','assetStatus','assetSubGroup')->find($id);
        //dd($asset);
        //$cate = AssetCategory::with('disablilityTypes')->find($asset->assetCategory->id);
        //dd($cate);
        return view('admin.assets.show', compact('asset'));
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
