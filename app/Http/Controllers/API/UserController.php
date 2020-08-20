<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Auth;
use Auth;
use Validator;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Auth\Events\Verified;

class UserController extends Controller
{
    public $successStatus = 200;
    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            if(($user->email_verified_at !== NULL) && ($user->active == true)){
                $user['token'] = $user->createToken('MyApp')->accessToken;
                $user['roles'] = $user->roles;
                return response()->json($user, $this->successStatus);
            }else {
                return response()->json(['error'=>'Please Verify Email or Verify by Admin'], 401);
            }

        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password'
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);

        //$input['confirmed_at'] = now();
        //$input['confirmation_code'] = null;

        $user = User::create($input);
        $user->sendApiEmailVerificationNotification();
        $user['message'] = "โปรดยืนยันอีเมล์ โดยกดปุ่มยืนยันในอีเเมล์ที่เราจัดส่งให้ท่าน !!!";
        return response()->json($user, 201);
    }
    /**
     * details api
     *
     * @return \Illuminate\Http\Response
     */
    public function details()
    {
        $user = Auth::user();
        $user['roles'] = $user->roles;
        return response()->json($user, $this->successStatus);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['confirmed_at'] = now();
        //$input['confirmation_code'] = null;

        $user = User::create($input);
        return response()->json($user, 201);
    }

    public function getAll()
    {
        $users = Auth::user()->with('roles')->get();
        return response()->json($users, $this->successStatus);
    }

    public function getById(Request $request)
    {
        $user = Auth::user()->with('roles')->findOrFail($request->id);
        //$user['roles'] = $user->roles;
        return response()->json($user, $this->successStatus);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json($user,$this->successStatus);
    }

    public function delete(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(null,204);
        //return 204;
    }
}
