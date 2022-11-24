<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $Role = Auth::user()->role;

        if ($Role == "0") {
            return view('admin/dashboard/index');
        }

        if ($Role == "1") {
       
            return view('frontend_file/user');
        }

    }
}
