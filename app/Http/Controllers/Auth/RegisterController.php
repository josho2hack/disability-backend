<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
//use BeyondCode\EmailConfirmation\Traits\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\UserOption;
use App\DisabilityType;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectConfirmationTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            //'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $register = [
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'citizen_id' => $data['citizen_id'],
            'pwd_id' => $data['pwd_id'],
            'gender' => $data['gender'],
            'disability_type_id' => $data['disability_type']
        ];

        if (request()->hasFile('pwd_pic')) {

            //dd(request());

            // Get the file from the request store to disk
            $path = request()->pwd_pic->store('users');

            // Get the path of the file
            $register['pwd_pic'] = $path;
        }

        if (UserOption::find(1)->verify == 0) {
            $register['email_verified_at'] = now();
        }

        $user = User::create($register);
        $user->roles()->attach(4);
        $user->save();

        // if ($user->email_verified_at == null) {
        //     $user->sendApiEmailVerificationNotification();
        // }

        return $user;
    }
}
