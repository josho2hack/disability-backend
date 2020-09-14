<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Form01;
use App\Form09;
use App\Form10;
use App\Form13;

class Form13Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form13 = Form13::with('form01s')->whereNotNull('report')->get();
        return view('admin.contracts.index', compact('form13'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $form = Form01::where('form13s_id', $request->id)->get();
        $data = [];

            foreach($form as $f) {
                $data['price'][$f->id] = $f->asset->price;
                $data['total'] = array_sum($data['price']);
            }
        $total = $data['total'];

        return view('admin.contracts.create', compact('form', 'total'));
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
        if ($request['contract']==1) {
            $form13s = Form13::find($id);
            $form13s['report'] = now();
            $form13s->save();

            return redirect('admin/approved');
        }
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

    public function approved()
    {
        // $form09 = Form09::with('form01s')->whereNotNull('report')->whereHas('form01s', function($q){ return $q->whereNotNull('approve_date'); })->get();
        $form13 = Form13::with('form01s')->whereHas('form01s', function($q){ return $q->whereNotNull('approve_date'); })->get();
        return view('admin.form.approved', compact('form13'));
    }

    public function disapproved()
    {
        $form10 = Form10::with('form01s')->whereNotNull('report')->whereHas('form01s', function($q){ return $q->whereNotNull('form10s_id'); })->get();
        return view('admin.form.disapproved', compact('form10'));
    }
}
