@extends('layouts.calendar')


@section('content')


    <div class="date">
        <span>Aujourd'hui</span>
        <hr>
    </div>

    <div class="rdv">


        <div class="unrdv">
            <div class="toprdv">
                <div class="lefttoprdv">
                    <p class="namerdv name">Boucherie Victor</p>
                    <p class="namerdv">48 Avenue Mozart, Paris</p>
                </div>
                <div class="midtoprdv">9 H 00</div>
                <div class="righttoprdv">
                    <img src="/uploads/ecb118cc4e7a6fc910d295fd05523cc1.jpeg">
                </div>
            </div>
            <div class="bottomrdv">
                <div class="leftbottomrdv">
                    <img src="/uploads/denisleboucher.jpg">
                </div>
                <a class="rightbottomrdv btn linealpurple">
                    supprimer
                </a>
            </div>
        </div>

        <div class="unrdv">
            <div class="toprdv">
                <div class="lefttoprdv">
                    <p class="namerdv name">Epicerie Fleure</p>
                    <p class="namerdv">15 rue de la paix, Paris</p>
                </div>
                <div class="midtoprdv">10 H 00</div>
                <div class="righttoprdv">

                </div>
            </div>
            <div class="bottomrdv">
                <div class="leftbottomrdv">
                    <img src="/uploads/epiceriefleure.jpg">
                </div>
                <a class="rightbottomrdv btn linealpurple">
                    supprimer
                </a>
            </div>
        </div>
    </div>

    <div class="date">
        <span>SAM 6/06</span>
        <hr>
    </div>

    <div class="rdv">


        <div class="unrdv">
            <div class="toprdv">
                <div class="lefttoprdv">
                    <p class="namerdv name">Style Barber'</p>
                    <p class="namerdv">12 rue du champs, Paris</p>
                </div>
                <div class="midtoprdv">16 H 00</div>
                <div class="righttoprdv">
                    <img src="/uploads/ecb118cc4e7a6fc910d295fd05523cc1.jpeg">
                </div>
            </div>
            <div class="bottomrdv">
                <div class="leftbottomrdv">
                    <img src="/uploads/barbierstyle.jpg">
                </div>
                <a class="rightbottomrdv btn linealpurple">
                    supprimer
                </a>
            </div>
        </div>
    </div>



@endsection
