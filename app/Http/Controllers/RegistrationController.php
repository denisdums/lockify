<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(Request $request)
    {


        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'birthdate'=>'required|date',
            'email' => 'required|email',
            'phone'=>'required|digits:10',
            'adresse'=>'required',
            'ville'=>'required',
            'pays'=>'required',
            'password' => 'required|confirmed',
            'avatar' => 'required'
        ]);

        $avatar = $request -> file('avatar')->hashName();
        $request->file('avatar')->move("uploads/", $avatar);

        $c = new User();
        $c->firstname = $request->input('firstname');
        $c->lastname = $request->input('lastname');
        $c->entrepreneur = false;
        $c->birthdate = $request->input('birthdate');
        $c->email = $request->input('email');
        $c->phone = $request->input('phone');
        $c->adresse = $request->input('adresse');
        $c->ville = $request->input('ville');
        $c->pays = $request->input('pays');
        $c->avatar = "uploads/".$avatar;
        $c->password = $request->input('password');
        $c-> save();





        return redirect()->to('/');
    }
}