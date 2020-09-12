<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;

use Illuminate\Http\Request;

use App\DisabilityType;
use App\News;
use App\SubGroup;

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
        $news = News::latest()->limit(3)->get();

        return view('home', compact('news'));
    }

    public function welcome()
    {
        $news = News::latest()->limit(3)->get();

        return view('welcome', compact('news'));
    }

    public function allLogin() {
        $news = News::latest()->limit(3)->get();
        $subgroup = SubGroup::with('assets')->get();

        return view('index', compact('news','subgroup'));
    }

    public function show_news($id) {
        $news = News::find($id)->limit(1)->get();
        return view('shownews', compact('news'));
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
