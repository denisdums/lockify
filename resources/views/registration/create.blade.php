@extends('layouts.app')

@section('content')

    <form method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="part_one">


        <input id="firstname" type="text" class="form-input" name="firstname" value="{{ old('firstname') }}" placeholder="Prénom">
        @if ($errors->has('firstname'))
            <span class="error">
                          <strong>{{ $errors->first('firstname') }}</strong>
                      </span>
        @endif

        <input id="lastname" type="text" class="form-input" name="lastname" value="{{ old('lastname') }}" placeholder="Nom">
        @if ($errors->has('lastname'))
            <span class="error">
                         <strong>{{ $errors->first('lastname') }}</strong>
            </span>
        @endif

            <input id="birthdate" type="date" class="form-input" name="birthdate" value="{{ old('birthdate') }}" placeholder="Date de naissance">
            @if ($errors->has('birthdate'))
                <span class="error">
                         <strong>{{ $errors->first('birthdate') }}</strong>
            </span>
            @endif

        <input id="email" type="email" class="form-input" name="email" value="{{ old('email') }}" placeholder="Mail">
        @if ($errors->has('email'))
            <span class="error">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
        @endif

        <input id="phone" class="form-input input-element" name="phone" value="{{ old('phone') }}" placeholder="Numéro de téléphone">
        @if ($errors->has('phone'))
            <span class="error">
                          <strong>{{ $errors->first('phone') }}</strong>
                      </span>
        @endif





        <div class="form-group part_two">
            <input type="text" class="form-control form-input" id="form-address" placeholder="Adresse" name="adresse" value="{{ old('adresse') }}"/>
            @if ($errors->has('adresse'))
                <span class="error">
                          <strong>{{ $errors->first('adresse') }}</strong>
                      </span>
            @endif


            <input type="text" class="form-control form-input" id="form-city" placeholder="Ville" name="ville" value="{{ old('ville') }}"/>
            @if ($errors->has('ville'))
                <span class="error">
                          <strong>{{ $errors->first('ville') }}</strong>
                      </span>
            @endif

            <input type="text" class="form-control form-input" id="form-country" placeholder="Pays" name="pays" value="{{ old('pays') }}"/>
            @if ($errors->has('pays'))
                <span class="error">
                          <strong>{{ $errors->first('pays') }}</strong>
                      </span>
            @endif

            <input type="file" name="avatar" required id="coverchanson" class="input-file2" accept="image/*">



        </div>



            <div class="part_three">
                <input id="password" type="password" class="form-input" name="password" value="{{ old('password') }}" placeholder="Mot de passe">
                @if ($errors->has('password'))
                    <span class="error">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                @endif

                <input id="password_confirmation" type="password" class="form-input" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirmer le mot de passe">
                @if ($errors->has('password_confirmation'))
                    <span class="error">
                          <strong>{{ $errors->first('password_confirmation') }}</strong>
                      </span>
                @endif
            </div>
            </div>
            </div>
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>



    </form>
<!--
    <div class="btn_box">

        <button type="submit" class="btn purple">Suivant</button>
        <a href="/" class="btn linealpurple">Précédent</a>
    </div> -->
@endsection
