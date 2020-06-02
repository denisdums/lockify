<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EntrepriseController extends Controller
{
    public function index()
    {
        return view('entreprise.index');
    }

    public function charcut()
    {
        return view('charcut.index');
    }
}
