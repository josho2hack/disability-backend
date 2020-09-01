<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Role;
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
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required'
        ]);

        if (!isset($request['active'])) {
            $request['active'] = 0;
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $role_id = $input['role'];
        unset($input['role']);

        if ($request->hasFile('avatar')) {

            // Get the file from the request store to disk
            $path = $request->avatar->store('public/users');

            // Get the contents of the file
            //$contents = Storage::get($path);
            $input['avatar_name'] = basename($path);
            $input['avatar_path'] = $path;
        }

        $user = User::create($input);
        $user->roles()->attach($role_id);

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
        return view('admin.users.show', compact('user'));
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
            'password' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'citizen_id' => 'required',
            'pwd_id' => 'required'
        ]);

        if (!isset($request['active'])) {
            $request['active'] = 0;
        }

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
