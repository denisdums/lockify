<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Metier;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $u = Metier::all();
        return view("home", ['metiers' => $u]);
    }
}
