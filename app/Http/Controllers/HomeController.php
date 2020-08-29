<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\DisabilityType;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
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
        $disabilitytype = DisabilityType::get();

        return view('auth.user-register', compact('disabilitytype'));
    }
}
