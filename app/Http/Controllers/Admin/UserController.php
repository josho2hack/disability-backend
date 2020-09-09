<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Role;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use App\UserOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class UserController extends Controller
{
    public function selected($role)
    {
        $userstemp = User::all();
        $userall['all'] = $userstemp->count();
        $userall['admin'] = 0;
        $userall['approve'] = 0;
        $userall['audit'] = 0;
        $userall['user'] = 0;
        foreach ($userstemp as $user) {
            $userall['user'] += $user->roles->where('name', 'User')->count();
            $userall['audit'] += $user->roles->where('name', 'Audit')->count();
            $userall['approve'] += $user->roles->where('name', 'Approve')->count();
            $userall['admin'] += $user->roles->where('name', 'Admin')->count();
        }
        //dd($userall);
        $role = Role::with('users')->find($role);
        //dd($role);
        $users = $role->users;
        //dd($users);
        return view('admin.users.index', compact('users'))->with('userall', $userall);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userstemp = User::all();
        $userall['all'] = $userstemp->count();
        $userall['admin'] = 0;
        $userall['approve'] = 0;
        $userall['audit'] = 0;
        $userall['user'] = 0;
        foreach ($userstemp as $user) {
            $userall['user'] += $user->roles->where('name', 'User')->count();
            $userall['audit'] += $user->roles->where('name', 'Audit')->count();
            $userall['approve'] += $user->roles->where('name', 'Approve')->count();
            $userall['admin'] += $user->roles->where('name', 'Admin')->count();
        }
        $users = User::with('roles', 'disability')->get();
        return view('admin.users.index', compact('users'))->with('userall', $userall);
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

        if ($request->hasFile('pwd_pic')) {
            $path = $request->pwd_pic->store('users');
            $input['pwd_pic'] = $path;
        }

        $year = now()->format('y');
        $year += 43;  //Thai Year
        $user = User::whereHas("roles", function($q) use($role_id){ $q->where("roles_id", $role_id); })->latest()->first();
        $idtemp = substr($user->system_id,5);
        $idtemp += 1;
        $num_padded = sprintf("%03d", $idtemp); //add 0 3 digit before ID

        if($role_id == 1){
            $input['system_id'] = 'AM'.$year.'-'.$num_padded;
        }elseif($role_id == 2){
            $input['system_id'] = 'AD'.$year.'-'.$num_padded;
        }elseif($role_id == 3){
            $input['system_id'] = 'AP'.$year.'-'.$num_padded;
        }elseif($role_id == 4){
            $input['system_id'] = 'MB'.$year.'-'.$num_padded;
        }

        $input['appove_date'] = now();

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
        $user = User::with('roles', 'disability')->find($id);
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
        $user = User::with('roles', 'disability')->find($id);
        return view('admin.users.edit', compact('user'));
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
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required'
        ]);

        if (!isset($request['active'])) {
            $request['active'] = 0;
        }

        $input = $request->all();

        if ($input['password'] == "") {
            unset($input['password']);
        } else {
            $input['password'] = bcrypt($input['password']);
        }

        if ($request->hasFile('avatar')) {

            // Get the file from the request store to disk
            $path = $request->avatar->store('public/users');

            // Get the contents of the file
            //$contents = Storage::get($path);
            $input['avatar_name'] = basename($path);
            $input['avatar_path'] = $path;
        }

        if ($request->hasFile('pwd_pic')) {
            $path = $request->pwd_pic->store('users');
            $input['pwd_pic'] = $path;
        }

        $role_id = $input['role'];
        unset($input['role']);

        $user->update($input);
        if ($user->role()->id != $role_id) {
            $user->roles()->detach($user->role()->id);
            $user->roles()->attach($role_id);
        }
        return redirect()->route('users.index')->with('success', 'ปรับปรุงอมูลเรียบร้อยแล้ว');
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

    public function option()
    {
        $option = UserOption::find(1);
        return view('admin.users.option', compact('option'));
    }

    public function optionupdate(Request $request)
    {
        $option = UserOption::find(1);

        if (!isset($request['first_name'])) {
            $request['first_name'] = 0;
        }

        if (!isset($request['last_name'])) {
            $request['last_name'] = 0;
        }

        if (!isset($request['pwd_id'])) {
            $request['pwd_id'] = 0;
        }

        if (!isset($request['citizen_id'])) {
            $request['citizen_id'] = 0;
        }

        if (!isset($request['avatar_name'])) {
            $request['avatar_name'] = 0;
        }

        if (!isset($request['verify'])) {
            $request['verify'] = 0;
        }

        $input = $request->all();

        $option->update($input);
        return redirect()->route('users.index')->with('success', 'บันทึกกำหนดค่าสมาชิกเรียบร้อยแล้ว');
    }
}
