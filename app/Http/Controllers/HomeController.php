<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Metier;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $a = Metier::all();
        return view("home", ['metiers' => $a]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }


}
