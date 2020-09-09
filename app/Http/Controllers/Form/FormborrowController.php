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
            $form->name = 'ทก.01';
            
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

        $borrow = New FormBorrow;
        $borrow->user_id = \Auth::user()->id;

        if ( $request->type == 2 ) {
            $check = Substitute::where('user_id', \Auth::user()->id)->first();
            if( $check == null ) {
                return redirect('form-borrow')->with('message', 'กรุณาเพิ่มข้อมูลผู้ยื่นคำขอแทน');
            }
           $borrow->substitute_id = Substitute::where('user_id', \Auth::user()->id)->first()->id;
        }

        $borrow->copy_card = $request->copy_card;
        $borrow->house_res = $request->house_res;
        $borrow->copy_train = $request->copy_train;
        $borrow->sub_copy_citizen_id = $request->sub_copy_citizen_id;
        $borrow->power_attorney = $request->power_attorney;
        $borrow->objective = $request->objective;
        $borrow->power_attorney = $request->power_attorney;
        $borrow->accessorie_list = $request->accessorie_list;
        $borrow->accessorie_no = $request->accessorie_no;
        $borrow->type = $request->type;


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
        $data = [];

        $category = AssetCategory::where('sub_groups_id',$request->sub_id)->get();

        $categories = "<option value=''>- เลือก -</option>";
        
        foreach( $category as $cate ){
            $asset = Asset::where('asset_categories_id', $cate->id)->first();
            if ($asset != null) {
                $categories .= "<option value='".$cate->id."'>".$cate->name.':'.$asset->description."</option>";
            }
        }

        return $categories;
    }
}
