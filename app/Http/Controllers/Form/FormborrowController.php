<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FormBorrow;
use App\Substitute;
use App\User;
use App\Profile;
use App\Asset;
use App\MainGroup;
use App\AssetCategory;
use App\Form01;
use App\UserDocument;
use PDF;

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
            $form = Form01::where('user_id' , \Auth::user()->id)->get();
            
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

        if( \Auth::user()->disability_type_id == null ){
            return redirect()->back()->with('message', 'กรุณาเพิ่มข้อมูลโปรไฟล์ให้ครบถ้วน');
        }
        $check_data = Profile::where('user_id', \Auth::user()->id)->first();
        if ( $check_data == null){
            return redirect()->back()->with('message', 'กรุณาเพิ่มข้อมูลโปรไฟล์ให้ครบถ้วน');
        }
        $check = Substitute::where('user_id', \Auth::user()->id)->first();
            if( $check == null ) {
                return redirect('form-borrow')->with('message', 'กรุณาเพิ่มข้อมูลผู้ยื่นคำขอแทน');
            }

        $address = Profile::where('user_id',\Auth::user()->id)->first();
        $assets = Asset::where('asset_statuses_id', '1')->get();
        $main = MainGroup::get();

        return view('forms.borrow.create', compact('address', 'assets', 'main'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $borrow = New Form01;;
        $borrow->user_id = \Auth::user()->id;

        if ( $request->type == 2 ) {
           $borrow->substitute_id = Substitute::where('user_id', \Auth::user()->id)->first()->id;
        }
        $accessorie = Asset::where('id', $request->accessorie_list)->first()->description;
        $borrow->asset_id = $request->accessorie_list;
        $borrow->type_status = $request->type;
        $borrow->objective = $request->objective1;
        $borrow->accessorie_list = $accessorie;
        $borrow->accessorie_no = $request->accessorie_no;

        if ($borrow->save()) {
            $doc = New UserDocument;
            $doc->user_id = \Auth::user()->id;
            $doc->form_id = $borrow->id;
            if ( $request->files_copy_card ){
                $filename1 = $request->files_copy_card->getClientOriginalName();
                $file1 = '/user/doucment/borrow'. $filename1;
                $request->files_copy_card->move(public_path('/user/doucment/borrow'), $file1);
                $doc->copy_card = $file1;
              }
            if ( $request->files_house_res ){
                $filename2 = $request->files_house_res->getClientOriginalName();
                $file2 = '/user/doucment/borrow'. $filename2;
                $request->files_house_res->move(public_path('/user/doucment/borrow'), $file2);
                $doc->house_res = $file2;
              }
            if ( $request->file_copy_train ){
                $filename3 = $request->file_copy_train->getClientOriginalName();
                $file3 = '/user/doucment/borrow'. $filename3;
                $request->file_copy_train->move(public_path('/user/doucment/borrow'), $file3);
                $doc->copy_train = $file3;
              }
            if ( $request->file_sub_copy_citizen_id ){
                $filename4 = $request->file_sub_copy_citizen_id->getClientOriginalName();
                $file4 = '/user/doucment/borrow'. $filename4;
                $request->file_sub_copy_citizen_id->move(public_path('/user/doucment/borrow'), $file4);
                $doc->sub_copy_citizen_id = $file4;
              }
            if ( $request->file_power_attorney ){
                $filename5 = $request->file_power_attorney->getClientOriginalName();
                $file5 = '/user/doucment/borrow'. $filename5;
                $request->file_power_attorney->move(public_path('/user/doucment/borrow'), $file5);
                $doc->power_attorney = $file5;
              }
            $doc->type = 'borrow';
            $doc->save();
        }
        return redirect('form-borrow');

        // if ( $request->type == 2 ) {
        //     $check = Substitute::where('user_id', \Auth::user()->id)->first();
        //     if( $check == null ) {
        //         return redirect('form-borrow')->with('message', 'กรุณาเพิ่มข้อมูลผู้ยื่นคำขอแทน');
        //     }
        //    $borrow->substitute_id = Substitute::where('user_id', \Auth::user()->id)->first()->id;
        // }

        // $borrow->copy_card = $request->copy_card;
        // $borrow->house_res = $request->house_res;
        // $borrow->copy_train = $request->copy_train;
        // $borrow->sub_copy_citizen_id = $request->sub_copy_citizen_id;
        // $borrow->power_attorney = $request->power_attorney;
        // $borrow->objective = $request->objective;
        // $borrow->power_attorney = $request->power_attorney;
        // $borrow->accessorie_list = $request->accessorie_list;
        // $borrow->accessorie_no = $request->accessorie_no;
        // $borrow->type = $request->type;

            
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

    public function get_number(Request $request)
    {
        $asset = Asset::where('id', $request->asset_id)->first()->code;

        return $asset;
    }
    
    public function get_data(Request $request)
    {
        if ( $request->chkType == 1 ){
            $address = Profile::where('user_id', \Auth::user()->id)->first();
            $address->title = \Auth::user()->title;
            $address->first_name = \Auth::user()->first_name;
            $address->last_name = \Auth::user()->last_name;
            $address->disability_type = \Auth::user()->disabilityType->description;
            $address->pwd_id = \Auth::user()->pwd_id;
            $address->email = \Auth::user()->email;

        }elseif ( $request->chkType == 2 ){
            $address = Substitute::where('user_id', \Auth::user()->id)->first();
        }

        return $address;
    }

    public function getcategory(Request $request)
    {

        $category = AssetCategory::where('sub_groups_id',$request->sub_id)->get();

        $categories = "<option value=''>- ประเภท -</option>";
        
        foreach( $category as $cate ){
            $categories .= "<option value='".$cate->id."'>".$cate->name."</option>";
        }

        return $categories;
    }

    public function getassets(Request $request)
    {

        $assets = Asset::where(['asset_categories_id' => $request->ac_id, 'asset_statuses_id' => '1'])->get();

        $list = "<option value=''>- เลือก -</option>";
        
        foreach( $assets as $asset ){
            $list .= "<option value='".$asset->id."'>".$asset->description."</option>";
        }

        return $list;
    }

     public function pdf($id)
    {

        $form = Form01::where('id', $id)->first();

        $pdf = PDF::loadview('forms.borrow.pdf', compact('form'));
        // return view('forms.borrow.pdf', compact('form'));
        return @$pdf->stream();
    }

    public function send_auditor($id)
    {
        $send_auditor = Form01::find($id);
        $send_auditor->send_status = '1';
        $send_auditor->send_date = date('Y-m-d H:i:s');

        if($send_auditor->save()){
            $asset = Asset::find($send_auditor->asset_id);
            $asset->asset_statuses_id = '3';
            return redirect()->back()->with('success', 'ส่งแบบฟอร์มเรียบร้อยแล้ว');
        }
    }

}
