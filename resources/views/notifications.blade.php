
@extends('layouts.notif')


@section('content')
    <div class="date">
        <span>Aujourd'hui</span>
        <hr>
    </div>

    <div class="notif_container">
        <div class="avatar_notif">
            <img src="/uploads/ecb118cc4e7a6fc910d295fd05523cc1.jpeg" alt="img_notif">
        </div>

        <div class="contenu_notif">
            <span class="text_notif"><b>Léo Delplanque</b> a ajouté  <b>Denis Dumont</b> dans la famille. </span>
            <span class="date_notif">10H37</span>
        </div>
    </div>

    <div class="notif_container">
        <div class="avatar_notif">
            <img src="/uploads/ecb118cc4e7a6fc910d295fd05523cc1.jpeg" alt="img_notif">
        </div>

        <div class="contenu_notif">
            <span class="text_notif"><b>Léo Delplanque</b> a pris un rendez-vous pour <b>Coiffeur Ciseaux</b> le 02/06/2020 à 17h. </span>
            <span class="date_notif">9H16</span>
        </div>
    </div>




    <div class="date">
        <span>29/05/2020</span>
        <hr>
    </div>

    <div class="notif_container no_color">
        <div class="avatar_notif">
            <img src="/uploads/ecb118cc4e7a6fc910d295fd05523cc1.jpeg" alt="img_notif">
        </div>

        <div class="contenu_notif " >
            <span class="text_notif"><b>Léo Delplanque</b> a pris un rendez-vous pour <b>Poissonier Citron</b> le 22/05/2020 à 18h. </span>
            <span class="date_notif">19H16</span>
        </div>
    </div>


@endsection

