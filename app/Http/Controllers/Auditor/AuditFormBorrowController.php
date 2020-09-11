<?php

namespace App\Http\Controllers\Auditor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Form01;
use App\TransectionFormBorrow;
use App\Form07;
use App\TransectionApprove;

class AuditFormBorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $audit = TransectionFormBorrow::all();
// dd($audit);
       return view('auditor.audit.index', compact('audit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $audits = [];
        $round = Form07::distinct('round')->latest()->count() +1 ;

        foreach( $request->check as $id ){
            $table[$id] = TransectionFormBorrow::where('form_id', $id)->first()->form_type;

            $table[$id] = "App\\$table[$id]";
            
            $audit[$id] = $table[$id]::where('id', $id)->first();
            $audit[$id]['table'] = $table[$id];
        }

        $audits = collect($audit);
// dd($audits);
        return view('auditor.audit.create', compact('audits', 'round'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach( $request->form_id as $form_id ){
            $audit = new Form07;
            $audit->round = $request->round;
            $audit->year = $request->year;
            $audit->office = $request->office;
            $audit->city = $request->city;
            $audit->form_id = $form_id;
            $audit->form_type = "form01";
            $audit->save();
        }



        return redirect('auditor/audits/form/send')->with('success', 'สร้างแบบฟอร์มเรียบร้อยแล้ว');
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

    public function send()
    {
        $data = [];
        $forms = Form07::get();

        foreach($forms as $form){
            $data[$form->round]['no'] = $form->round;
            $data[$form->round]['list'] = $form->where('round', $data[$form->round]['no'])->count();
            $data[$form->round]['submit_date'] = $form->created_at;
            $data[$form->round]['audit_date'] = $form->audit_date;

        }
// dd($data);
        return view('auditor.audit.send', compact('data'));
    }

    public function send_approver($id)
    {
        if($form07 = Form07::whereRound($id)->update(['audit_date' => date('Y-m-d H:i:s')])){
            $send_approve =  new TransectionApprove;
            $send_approve->form07_id = Form07::where('round', $id)->first()->id;
            $send_approve->list = Form07::where('round', $id)->groupBy('round')->count();
            $send_approve->save();

            return redirect()->back()->with('success', 'บันทึกเรียบร้อยแล้ว');
        }
        
    }
}
