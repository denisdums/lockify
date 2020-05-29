<?php

namespace App\Http\Controllers;

use App\Entreprise;
use App\Metier;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;


class RegistrationEntController extends Controller
{
    public function create()
    {
        $m = Metier::all();
        return view('registration.createEnt', ['metiers' => $m]);
    }

    public function store(Request $request)
    {


        $this->validate($request, [
            'entreprisename' => 'required',
            'email' => 'required|email',
            'phone'=>'required|digits:10',
            'adresse'=>'required',
            'categorie'=>'required',
            'description' => 'required',
            'clientmax' => 'required',
            'creneau' => 'required',
            'ville'=>'required',
            'pays'=>'required',
            'password' => 'required|confirmed',
            'avatar' => 'file'
        ]);

        $avatar = $request -> file('avatar')->hashName();
        $request->file('avatar')->move("uploads/", $avatar);

        $c = new User();
        $c->firstname = "test";
        $c->lastname = "nomdefamille";
        $c->entrepreneur = true;
        $c->email = $request->input('email');
        $c->birthdate = null;
        $c->phone = $request->input('phone');
        $c->adresse = $request->input('adresse');
        $c->ville = $request->input('ville');
        $c->pays = $request->input('pays');
        $c->avatar = "uploads/".$avatar;
        $c->password = $request->input('password');
        $c-> save();


        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], true))


        return redirect()->to('/home');
    }
}
