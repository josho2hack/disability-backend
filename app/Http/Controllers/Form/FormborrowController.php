<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FormBorrow;
use App\Substitute;
use App\User;
use App\Profile;

class FormborrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if( isset(\Auth::user()->id) ) {
            $form = FormBorrow::where('user_id', \Auth::user()->id)->get();

            return view('forms.borrow.index' ,compact('form'));
        }else{
            return redirect('login');
        }

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $check_data = Profile::where('user_id', \Auth::user()->id)->first();
        if ( $check_data == null){
            return redirect()->back()->with('message', 'กรุณาเพิ่มข้อมูลโปรไฟล์ให้ครบถ้วน');
        }

        return view('forms.borrow.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['user_id'] = \Auth::user()->id;

        if ( $request->type == 2 ) {
            $check = Substitute::where('user_id', \Auth::user()->id)->first();
            if( $check == null ) {
                return redirect('form-borrow')->with('message', 'กรุณาเพิ่มข้อมูลผู้ยื่นคำขอแทน');
            }
            $request['substitute_id'] = Substitute::where('user_id', \Auth::user()->id)->first()->id;
        }
        
        $borrow = New FormBorrow;
        $borrow->fill($request->all());

        if ( $borrow->save() ){
            return redirect('form-borrow');
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
        $form = FormBorrow::where('id', $id)->first();
        $user = User::where('id',\Auth::user()->id)->first();
        
        return view('forms.borrow.form_borrow', compact('form', 'user'));
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
}
