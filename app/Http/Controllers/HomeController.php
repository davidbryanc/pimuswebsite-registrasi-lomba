<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->divisi == "Admin" || Auth::user()->divisi == "Sekre" || Auth::user()->divisi == "Panitia") {
            return redirect()->route('admin');
        }
        return redirect()->route('index');
    }
}
