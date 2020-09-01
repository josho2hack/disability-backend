<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'active' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'citizen_id' => 'required',
            'pwd_id' => 'required',
            'disability_types_id' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);

        if ($request->hasFile('avatar_name')) {

            // Get the file from the request store to disk
            $path = $request->image->store('users');

            // Get the contents of the file
            $contents = Storage::get($path);
            //$input['avatar_name'] = $contents;
            $input['avatar_path'] = $path;
        }

        User::create($input);
        return redirect()->route('users.index')->with('success', 'บันทึกข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with('roles','disability')->find($id);
        return view('admin.users.create', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::with('roles','disability')->find($id);
        return view('admin.users.create', compact('user'));
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
        $user = User::find($id);
        $request->validate([
            'email' => 'required',
            'password' => 'password'
        ]);

        $input = $request->all();

        if($input['password'] != ""){
            $input['password'] = bcrypt($input['password']);
        }else{
            unset($input['password']);
        }

        if ($request->hasFile('image')) {

            // Get the file from the request store to disk
            $path = $request->image->store('users');

            // Get the contents of the file
            $contents = Storage::get($path);
            $input['image'] = $contents;
            Storage::delete($path);
        }

        $user->update($input);
        return redirect()->route('subgroups.index')->with('success', 'ปรับปรุงอมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}
