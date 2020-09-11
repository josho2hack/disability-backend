<?php

namespace App\Http\Controllers\Approve;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Form01;
use App\Form09;
use App\Form10;

class Form09Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form09 = Form09::with('form01s')->get();
        return view('approve.form09.index', compact('form09'));
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
        $form09 = Form09::with('form01s')->find($id);
        $form01s = $form09->form01s;
        $form10 = Form10::where('round', $form09->round)->where('office', $form09->office)->where('year', $form09->year)->first();
        return view('approve.form09.show', compact('form09','form01s','form10'));
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
            $form09 = Form09::find($form01->form09s_id);
            if ($request['cancel'] == 1) {
                $form10 = Form10::where('round', $form09->round)->where('office', $form09->office)->where('year', $form09->year)->first();
                if (empty($form10->id)) {
                    $form10 = new Form10();
                    $form10['round'] = $form09['round'];
                    $form10['year'] = $form09['year'];
                    $form10['office'] = $form09['office'];
                    $form10['city'] = $form09['city'];
                    $form10->save();
                }
                $form01['form10s_id'] = $form10->id;
                $form01['form09s_id'] = null;
                $form01->save();
            }

            $form09 = Form09::with('form01s')->find($form09->id);
            $form01s = $form09->form01s;
            return view('approve.form09.show', compact('form09', 'form01s','form10'));

        } else {

        $form09 = Form09::with('form01s')->find($id);
        $form09['report'] = now();
        $form09->save();
        return view('approve.form09.index', compact('form09'));
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
