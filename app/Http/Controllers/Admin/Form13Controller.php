<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Form01;
use App\Form09;
use App\Form10;
use App\Form13;
use App\DocContract;
use App\DocGaruntee;

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
        $docContract = DocContract::with('form01s')->get();

        return view('admin.contracts.index', compact('form13', 'docContract'));
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
        if ($request["contracts"] == 1) {
            $docContract = new DocContract();

            $sYear = date($request->start_year) - 543;
            $sYear = $sYear."-".$request->start_month."-".$request->start_day;
            $startDate = date($sYear);
            $tYear = date($request->stop_year) - 543;
            $tYear = $tYear."-".$request->stop_month."-".$request->stop_day;
            $stopDate = date($tYear);

            $docContract->office = $request->doc_office;
            $docContract->sub_district = $request->doc_sub_district;
            $docContract->district = $request->doc_district;
            $docContract->city = $request->doc_province;
            $docContract->PS_name = $request->PS_name;
            $docContract->start_date = $startDate; // get by start_day / month / year
            $docContract->stop_date = $stopDate; // get by start_day / month / year
            $docContract->return_date = $request->return_date;
            $docContract->estimate_day = $request->estimate_day;
            $docContract->fines = $request->fines;

            $docContract->save();

            $docContracts = DocContract::latest()->get();

            $form01s = Form01::find($request->form01id);
            $form01s->doc_contracts_id = $docContracts->first()->id;

            $form01s->save();

            // dd($docContracts->id);

            return redirect("admin/approved");
        } elseif ($request["garuntee"] == 1) {
            $docGaruntee = new DocGaruntee();

            // $sYear = date($request->start_year) - 543;
            // $sYear = $sYear."-".$request->start_month."-".$request->start_day;
            // $startDate = date($sYear);
            // $tYear = date($request->stop_year) - 543;
            // $tYear = $tYear."-".$request->stop_month."-".$request->stop_day;
            // $stopDate = date($tYear);

            $docGaruntee->office = 'สำนักงานปลัดกระทรวงเทคโนโลยีสารสนเทศและการสื่อสาร';
            $docGaruntee->city = 'กรุงเทพมหานคร';

            // dd($request);

            $docGaruntee->save();

            $docGaruntee = DocGaruntee::latest()->get();

            $form01s = Form01::find($request->form01id);
            $form01s->doc_garuntee_id = $docGaruntee->first()->id;

            $form01s->save();

            // dd($docContracts->id);

            return redirect("admin/approved");
        } else {
            return redirect("admin/approved");
        }
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
        return view('admin.form.show_approved', compact('form09','form01s','form10'));

    }

    public function show_disapproved($id)
    {
        $form10 = Form10::with('form01s')->find($id);
        $form01s = $form10->form01s;
        $form09 = Form09::where('round', $form10->round)->where('office', $form10->office)->where('year', $form10->year)->first();
        return view('admin.form.show_disapproved', compact('form09','form01s','form10'));
    }


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
        $form13s = Form13::find($id);
        $form13s['report'] = now();
        $form13s->save();

        return redirect("admin/approved");
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

    public function garuntees($id)
    {
        $form = form01::find($id);
        return view('admin.contracts.garuntee', compact('form'));
    }
}
