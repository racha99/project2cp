<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\app\Http\Rquests;
use Auth;
use Image;
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
        return view('home', array('user' => Auth::user()));
    }
}