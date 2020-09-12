<?php

namespace App\Http\Controllers\Auditor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Form01;
use App\TransectionFormBorrow;
use App\Form07;
use App\TransectionApprove;
use App\UserDocument;

class AuditFormBorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $audit = Form01::where(['send_status' => '1',
                                'audit_date' => null,
                                'form07s_id' => null
                            ])->get();
       // $audit = TransectionFormBorrow::all();
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
        $audit = new Form07;
        $audit->round = $request->round;
        $audit->year = $request->year;
        $audit->office = $request->office;
        $audit->city = $request->city;

        foreach( $request->form_id as $form_id ){
            
        //     $audit->form_id = $form_id;
        //     $audit->form_type = "form01";
            if($audit->save()){
                $form01 = Form01::find($form_id);
                $form01->form07s_id = $audit->id;

                $form01->save();
            }
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
        $form07 = Form07::get();

        foreach($form07 as $form){
            $data[$form->id]['id'] = $form->id;
            $data[$form->id]['list'] = Form01::where('form07s_id', $form->id)->count();
            $data[$form->id]['submit_date'] = $form->created_at;

            $data[$form->id]['audit_date'] = 
                Form01::where('form07s_id', $form->id)->first() != null ? 
                Form01::where('form07s_id', $form->id)->first()->audit_date : 
                null;

        }

        return view('auditor.audit.send', compact('data'));
    }

    public function send_approver($id)
    {
        $send_approve = Form07::with('form01s')->find($id);
        foreach( $send_approve->form01s as $form01){
                $form01->audit_date = now();
                $form01->save();
        }

        if($send_approve->update()){
            return redirect()->back()->with('success', 'บันทึกเรียบร้อยแล้ว');
        }
    }

    public function documents($id)
    {
        $doc = UserDocument::where('form_id', $id)->first();
// dd($doc);
        return view('auditor.audit.show_document', compact('doc'));
    }
}
