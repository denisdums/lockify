<?php

namespace App\Http\Controllers;

use App\Entreprise;
use App\Metier;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

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
        $c->entrepreneur = true;
        $c->email = $request->input('email');
        $c->phone = $request->input('phone');
        $c->adresse = $request->input('adresse');
        $c->ville = $request->input('ville');
        $c->pays = $request->input('pays');
        $c->avatar = "uploads/".$avatar;
        $c->password = $request->input('password');
        $c-> save();


        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], true))

        $e = new Entreprise();
        $e->user_id = Auth::user()->id;
        $e->name = $request->input('entreprisename');
        $e->email = $request->input('email');
        $e->phone = $request->input('phone');
        $e->categorie = $request->input('categorie');
        $e->description = $request->input('description');
        $e->adresse = $request->input('adresse');
        $e->ville = $request->input('ville');
        $e->pays = $request->input('pays');
        $e->clientmax = $request->input('maxclient');
        $e->creneau = $request->input('creneau');
        $e->avatar = "uploads/".$avatar;
        $e->monday = $request->input('open_monday');
        $e->monday_morn = $request->input('monday_morn');
        $e->monday_morn_start = $request->input('monday_morn_start');
        $e->monday_morn_end = $request->input('monday_morn_end');
        $e->monday_morn = $request->input('monday_after');
        $e->monday_morn_start = $request->input('monday_after_start');
        $e->monday_morn_end = $request->input('monday_after_end');
        $e->tuesday = $request->input('open_tuesday');
        $e->tuesday_morn = $request->input('tuesday_morn');
        $e->tuesday_morn_start = $request->input('tuesday_morn_start');
        $e->tuesday_morn_end = $request->input('tuesday_morn_end');
        $e->tuesday_morn = $request->input('tuesday_after');
        $e->tuesday_morn_start = $request->input('tuesday_after_start');
        $e->tuesday_morn_end = $request->input('tuesday_after_end');
        $e->wednesday = $request->input('open_wednesday');
        $e->wednesday_morn = $request->input('wednesday_morn');
        $e->wednesday_morn_start = $request->input('wednesday_morn_start');
        $e->wednesday_morn_end = $request->input('wednesday_morn_end');
        $e->wednesday_morn = $request->input('wednesday_after');
        $e->wednesday_morn_start = $request->input('wednesday_after_start');
        $e->wednesday_morn_end = $request->input('wednesday_after_end');
        $e->thursday = $request->input('open_thursday');
        $e->thursday_morn = $request->input('thursday_morn');
        $e->thursday_morn_start = $request->input('thursday_morn_start');
        $e->thursday_morn_end = $request->input('thursday_morn_end');
        $e->thursday_morn = $request->input('thursday_after');
        $e->thursday_morn_start = $request->input('thursday_after_start');
        $e->thursday_morn_end = $request->input('thursday_after_end');
        $e->friday = $request->input('open_friday');
        $e->friday_morn = $request->input('friday_morn');
        $e->friday_morn_start = $request->input('friday_morn_start');
        $e->friday_morn_end = $request->input('friday_morn_end');
        $e->friday_morn = $request->input('friday_after');
        $e->friday_morn_start = $request->input('friday_after_start');
        $e->friday_morn_end = $request->input('friday_after_end');
        $e->saturday = $request->input('open_saturday');
        $e->saturday_morn = $request->input('saturday_morn');
        $e->saturday_morn_start = $request->input('saturday_morn_start');
        $e->saturday_morn_end = $request->input('saturday_morn_end');
        $e->saturday_morn = $request->input('saturday_after');
        $e->saturday_morn_start = $request->input('saturday_after_start');
        $e->saturday_morn_end = $request->input('saturday_after_end');
        $e->sunday = $request->input('open_sunday');
        $e->sunday_morn = $request->input('sunday_morn');
        $e->sunday_morn_start = $request->input('sunday_morn_start');
        $e->sunday_morn_end = $request->input('sunday_morn_end');
        $e->sunday_morn = $request->input('sunday_after');
        $e->sunday_morn_start = $request->input('sunday_after_start');
        $e->sunday_morn_end = $request->input('sunday_after_end');

        $e-> save();
        return redirect()->to('/home');
    }
}
