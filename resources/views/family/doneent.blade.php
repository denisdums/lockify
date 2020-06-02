@extends('layouts.family')


@section('content')


    <div class="famille_title">
        <h2>FAMILLE</h2><hr><a href="/family/add">+</a>
    </div>

    <div class="family_person">
        <div class="person">
            <div class="photo_family"><img src="/uploads/d53d0fb1027a8b6693ec9f2c6556a6a4.png"> </div>
            <h2>Denis Dumont</h2>
        </div>

        <div class="person">
            <div class="photo_family"><img src="/uploads/ecb118cc4e7a6fc910d295fd05523cc1.jpeg"> </div>
            <h2>Léo Delplanque</h2>
        </div>
    </div>

    <div class="famille_title">
        <h2>ENTREPRISE</h2><hr><a href="/entreprise/add">+</a>
    </div>

    <div class="family_person">
        <div class="person">
            <div class="photo_family"><img src="/uploads/denisleboucher.jpg"> </div>
            <h2>Denis Dumont Boucherie</h2>
        </div>
    </div>



@endsection


