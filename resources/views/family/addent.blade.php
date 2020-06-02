@extends('layouts.family')


@section('content')


    <div class="famille_title">
        <h2>Ajoutez une entreprise</h2>
    </div>

    <input id="password" type="text" class="form-input" name="password" value="{{ old('password') }}" placeholder="Identifiant entreprise">

    <div class="btn_box_menu fill_box_btn">
        <a href="/entreprise/add/done" class="btn purple" id="register_first_next">Valider</a>
        <a href="/family" class="btn linealpurple">Précédent</a>
    </div>



@endsection



