<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;

use Illuminate\Http\Request;

use App\DisabilityType;

class HomeController extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
        // $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function logout(){
        Auth::logout();
    }

    public function user_login()
    {
        return view('auth.user-login');
    }

    public function register()
    {
        $disability = DisabilityType::get();

        return view('auth.user-register', compact('disability'));
    }
}
