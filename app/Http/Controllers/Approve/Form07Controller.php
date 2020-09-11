<?php

namespace App\Http\Controllers\Approve;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Form07;
use App\Form01;
use App\Form09;
use App\Form10;

class Form07Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form07 = Form07::with('form01s')->get();
        return view('approve.form07.index', compact('form07'));
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
        $form07 = Form07::with('form01s')->find($id);
        $form01s = $form07->form01s;
        $form09 = Form09::where('round', $form07->round)->where('office', $form07->office)->where('year', $form07->year)->first();
        $form10 = Form10::where('round', $form07->round)->where('office', $form07->office)->where('year', $form07->year)->first();
        return view('approve.form07.show', compact('form07', 'form01s','form09','form10'));
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
            $form07 = Form07::with('form01s')->find($form01->form07s_id);
            if ($request['approve'] == 1) {
                $form09 = Form09::where('round', $form07->round)->where('office', $form07->office)->where('year', $form07->year)->first();
                if ($form09->id == null) {
                    $form09 = new Form09();
                    $form09['round'] = $form07['round'];
                    $form09['year'] = $form07['year'];
                    $form09['office'] = $form07['office'];
                    $form09['city'] = $form07['city'];
                    $form09->save();
                }
                $form01['form09s_id'] = $form09->id;
                $form01['form10s_id'] = null;
                $form01->save();
                $form07['report'] = now();
                $form07->save();
            } elseif ($request['cancel'] == 1) {
                $form10 = Form10::where('round', $form07->round)->where('office', $form07->office)->where('year', $form07->year)->first();
                if (empty($form10->id)) {
                    $form10 = new Form10();
                    $form10['round'] = $form07['round'];
                    $form10['year'] = $form07['year'];
                    $form10['office'] = $form07['office'];
                    $form10['city'] = $form07['city'];
                    $form10->save();
                }
                $form01['form10s_id'] = $form10->id;
                $form01['form09s_id'] = null;
                $form01->save();
                $form07['report'] = now();
                $form07->save();
            }

            $form07 = Form07::with('form01s')->find($form07->id);
            $form01s = $form07->form01s;
            return view('approve.form07.show', compact('form07', 'form01s'));

        } else {
            $form07 = Form07::with('form01s')->find($id);
            if ($request['approve'] == 1) {
                $form09 = new Form09();
                $form09['round'] = $form07['round'];
                $form09['year'] = $form07['year'];
                $form09['office'] = $form07['office'];
                $form09['city'] = $form07['city'];
                $form09->save();
                foreach ($form07->form01s as $form01) {
                    $form01['form09s_id'] = $form09['id'];
                    $form01->save();
                }
            } elseif ($request['cancel'] == 1) {
                $form10 = new Form10();
                $form10['round'] = $form07['round'];
                $form10['year'] = $form07['year'];
                $form10['office'] = $form07['office'];
                $form10['city'] = $form07['city'];
                $form10->save();
                foreach ($form07->form01s as $form01) {
                    $form01['form010s_id'] = $form10['id'];
                    $form01->save();
                }
            }

            $form07['report'] = now();
            $form07->save();
            return view('approve.form07.index', compact('form07'));
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
