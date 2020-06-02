<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class FamilyController extends Controller
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
        return view('family.family');
    }

    public function add()
    {
        return view('family.add');
    }

    public function done()
    {
        return view('family.done');
    }

    public function addEnt()
    {
        return view('family.addent');
    }

    public function doneEnt()
    {
        return view('family.doneent');
    }


}
