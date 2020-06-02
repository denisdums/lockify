
@extends('layouts.entreprise')


@section('content')

    <div class="img_profil">
        <img src="/uploads/denisleboucher.jpg" alt="photo">
    </div>

    <div class="bas_de_profil">
        <a href="" class="link_profile"><div class="icon_link_profile"><img src="/assets/images/flechehaut.svg" alt="icon_edit"></div></a>
        <span class="name_user">Charcuterie Denis</span>
        <span class="id_user">#33</span>
        <img class="like" src="/assets/images/coeur.png" alt="like">
        <span class="ouverture_ent">OUVERT</span>

        <span class="desc_ent">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor, nullam vitae, id facilisis urna pharetra. Vel pretium urna vitae tellus pellentesque consectetur. Duis volutpat.</span>

        <hr class="trait_ent">

        <span class="horaires_ent">
            Horaires disponibles
        </span>

        <select class="date_ent">
            <option>Aujourd'hui</option>
            <option>Demain</option>
            <option>05/06/2020</option>
            <option>06/06/2020</option>
        </select>
        <div class="horaires_dispo">
            <div class="cases">9 h 00</div>
            <div class="cases">9 h 15</div>
            <div class="cases">10 h 30</div>
            <div class="cases">11 h 00</div>
            <div class="cases">11 h 15</div>
            <div class="cases">11 h 30</div>
            <div class="cases">11 h 45</div>
            <div class="cases">12 h 00</div>
            <div class="cases">14 h 00</div>
            <div class="cases">14 h 15</div>
            <div class="cases">14 h 30</div>
            <div class="cases">14 h 45</div>
            <div class="cases">15 h 00</div>
            <div class="cases">15 h 15</div>
            <div class="cases">15 h 30</div>
            <div class="cases">15 h 45</div>
            <div class="cases">9 h 00</div>
            <div class="cases">9 h 15</div>
            <div class="cases">10 h 30</div>
            <div class="cases">11 h 00</div>
            <div class="cases">11 h 15</div>
            <div class="cases">11 h 30</div>
            <div class="cases">11 h 45</div>
            <div class="cases">12 h 00</div>
            <div class="cases">14 h 00</div>
            <div class="cases">14 h 15</div>
            <div class="cases">14 h 30</div>
            <div class="cases">14 h 45</div>
            <div class="cases">15 h 00</div>
            <div class="cases">15 h 15</div>
            <div class="cases">15 h 30</div>
            <div class="cases">15 h 45</div>
        </div>

    </div>
@endsection
