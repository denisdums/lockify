<div class="menu">
    <div class="container_menu">
        <a href="/home">
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

        <a href="/profile"  class="menu_selected">
            <div class="icon" style="background-image: url('/assets/images/menu/profil.svg')"></div>
            <span>Profil</span>
        </a>
    </div>
</div>

<div class="img_profil">
    <img src="/{{$utilisateur -> avatar}}" alt="photo">
</div>

<div class="bas_de_profil">
    <a href="" class="link_profile"><div class="icon_link_profile"><img src="/assets/images/edit.svg" alt="icon_edit"></div></a>
    <span class="name_user">{{$utilisateur -> firstname}} {{$utilisateur -> lastname}}</span>
    <span class="id_user">#{{$utilisateur -> id}}</span>
    <span class="fav_user">Mes favoris</span>
    <div class="fav">
        <span>nom du favoris</span>
    </div>
</div>


@extends('layouts.home')


@section('content')




@endsection
