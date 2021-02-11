<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('content.info');
    }

    public function prof()
    {
        return view('content.prof');
    }
    
    public function akun()
    {
        return view('content.akun');
    }

    public function pand()
    {
        return view('content.pand');
    }

    public function rform()
    {
        return view('content.rform');
    }

    public function form()
    {
        return view('content.form');
    }

    public function peng()
    {
        return view('content.peng');
    }
}
