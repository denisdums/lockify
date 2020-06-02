<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Metier;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $m = Metier::all();
        return view('home', ['metiers' => $m]);
    }
}
