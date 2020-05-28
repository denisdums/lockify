<div class="scroller">
    <img src="assets/images/fond.png" alt="background" class="fond_scroller">
    <img src="assets/images/logo_blanc.svg" alt="logo_blanc" class="logo_scroller">
    <div class="unscroll">
        <span class="btn_secteur">rechercher un secteur</span>
        <div class="btn_order"><img src="assets/images/order.svg" alt="btn_order_img"></div>
    </div>
</div>



<div class="menu">
    <div class="container_menu">
        <a href="/home" class="menu_selected">
            <div class="icon" style="background-image: url('/assets/images/menu/home.svg')"></div>
            <span>Home</span>
        </a>

        <a href="/notifications">
            <div class="icon" style="background-image: url('/assets/images/menu/notifications.svg')"></div>
            <span>Notifications</span>
        </a>

        <a href="/calendar">
            <div class="icon" style="background-image: url('/assets/images/menu/calendrier.svg')"></div>
            <span>Calendrier</span>
        </a>

        <a href="/family">
            <div class="icon" style="background-image: url('/assets/images/menu/famille.svg')"></div>
            <span>Famille</span>
        </a>

        <a href="/profile">
            <div class="icon" style="background-image: url('/assets/images/menu/profil.svg')"></div>
            <span>Profil</span>
        </a>
    </div>
</div>

@extends('layouts.home')


@section('content')
    @php
    $metiers=[
        'antiquaire' => 'antiquaire.jpg',
        'barbier' => 'barbier.jpg',
        'bijoutier' => 'bijoutier.jpg',
        'boulangerie' => 'boulangerie.jpg',
        'charcuterie' => 'charcuterie.jpg',
        'chocolaterie' => 'chocolaterie.jpg',
        'coiffeur' => 'coiffeur.jpg',
        'cordonier' => 'cordonier.jpg',
        'couturière' => 'couturiere.jpg',
        'épicerie' => 'epicerie.jpg',
        'ésthéticienne' => 'estheticienne.jpg',
        'fleuriste' => 'fleuriste.jpg',
        'fromagerie' => 'fromagerie.jpg',
        'garagiste' => 'garagiste.jpg',
        'maroquinier' => 'maroquinier.jpg',
        'opticien' => 'opticien.jpg',
        'parfumerie' => 'parfumerie.jpg',
        'pressing' => 'pressing.jpg',
        'pressing' => 'pressing.jpg',
        'prêt à porter' => 'pret-a-porter.jpg',
        'réparateur de vélo' => 'reparateur de velo.jpg',
        'taxidermiste' => 'taxidermiste.jpg',
    ]
    @endphp
    <div class="template_grid">
    @php($i=0)
    @foreach ($metiers as $key => $value)
            @php($i++)
            <a href="" class="grid{{$i}}"><img src="assets/images/metiers/{{$value}}" alt="{{$key}}"><span>{{$key}}</span></a>
        @php
          if($i %9 ==0){
            $i =0;
            echo "</div><div class='template_grid'>";
        }
        @endphp

    @endforeach
    </div>


@endsection
