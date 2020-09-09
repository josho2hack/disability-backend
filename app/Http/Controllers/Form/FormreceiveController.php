<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use App\Profile;
use App\Asset;


class FormreceiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        if( \Auth::user()->disability_type_id == null ){
            return redirect()->back()->with('message', 'กรุณาเพิ่มข้อมูลโปรไฟล์ให้ครบถ้วน');
        }
        $check_data = Profile::where('user_id', \Auth::user()->id)->first();
        if ( $check_data == null){
            return redirect()->back()->with('message', 'กรุณาเพิ่มข้อมูลโปรไฟล์ให้ครบถ้วน');
        }

        $address = Profile::where('user_id',\Auth::user()->id)->first();
        $assets = Asset::where('asset_statuses_id', '1')->get();

        return view('forms.receive.create', compact('address', 'assets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function pdf_receive()
    {
    	$pdf = PDF::loadview('forms.receive.pdf');
    	// return view('forms.borrow.pdf', compact('form'));
    	return @$pdf->stream();
    }
}
