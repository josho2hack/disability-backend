<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;

use Illuminate\Http\Request;

use App\DisabilityType;
use App\News;

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

    public function allLogin() {
        $news = News::orderBy('created_at', 'DESC')->take(3)->get();

        return view('index', compact('news'));
    }

    public function logout(){
        Auth::logout();
    }

    public function user_login()
    {
        return view('auth.user-login');
    }
    public function admin_login()
    {
        return view('auth.admin-login');
    }
    public function audit_login()
    {
        return view('auth.audit-login');
    }
    public function approve_login()
    {
        return view('auth.approve-login');
    }

    public function register()
    {
        $disability = DisabilityType::get();

        return view('auth.user-register', compact('disability'));
    }
}
