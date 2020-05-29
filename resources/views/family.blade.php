<div class="scroller">
    <img src="assets/images/fond.png" alt="background" class="fond_scroller">
    <img src="assets/images/logo_blanc.svg" alt="logo_blanc" class="logo_scroller">
</div>

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

        <a href="/family"  class="menu_selected">
            <div class="icon" style="background-image: url('/assets/images/menu/famille.svg')"></div>
            <span>Famille</span>
        </a>

        <a href="/profile"  >
            <div class="icon" style="background-image: url('/assets/images/menu/profil.svg')"></div>
            <span>Profil</span>
        </a>
    </div>
</div>


@extends('layouts.home')


@section('content')

<div class="famille_title">
    <h2>FAMILLE</h2><hr><a href="#">+</a>
</div>

@endsection


