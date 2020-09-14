<?php

namespace App\Http\Controllers\Approve;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Form01;
use App\Form09;
use App\Form10;

class Form10Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form10 = Form10::with('form01s')->whereHas('form01s', function($q){ return $q->whereNotNull('form10s_id'); })->get();
        return view('approve.form10.index', compact('form10'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $form10 = Form10::with('form01s')->find($id);
        $form01s = $form10->form01s;
        $form09 = Form09::where('round', $form10->round)->where('office', $form10->office)->where('year', $form10->year)->first();
        return view('approve.form10.show', compact('form09','form01s','form10'));
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
        if ($request['form01'] == 1) {
            $form01 = Form01::find($id);
            $form10 = Form10::find($form01->form10s_id);
            if ($request['approve'] == 1) {
                $form09 = Form09::where('round', $form10->round)->where('office', $form10->office)->where('year', $form10->year)->first();
                if (empty($form09->id)) {
                    $form09 = new Form10();
                    $form09['round'] = $form10['round'];
                    $form09['year'] = $form10['year'];
                    $form09['office'] = $form10['office'];
                    $form09['city'] = $form10['city'];
                    $form09->save();
                }
                $form01->send_status = 3;
                $form01->form09s_id = $form09->id;
                $form01->form10s_id = null;
                $form01->save();
            }

            $form10 = Form10::with('form01s')->find($form10->id);
            $form01s = $form10->form01s;
            return view('approve.form09.show', compact('form09', 'form01s','form10'));

        } else {

            $form10 = Form10::find($id);
            $form10['report'] = now();
            $form10->save();
            $form01 = Form01::whereForm10sId($id)->get();
            $formid = $form01[0]->id;
            $form01s = Form01::find($formid);
            $form01s['send_status'] = '3';
            $form01s->save();

            $form10 = Form10::with('form01s')->get();
            return view('approve.form10.index', compact('form10'));
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

}
