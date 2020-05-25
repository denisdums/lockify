@extends('layouts.app')

@section('content')
          <form class="form" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
              <input id="email" type="email" class="form-input" name="email" value="{{ old('email') }}" placeholder="Mail">
                  @if ($errors->has('email'))
                      <span class="error">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif

              <input id="password" type="password" class="form-input" name="password" placeholder="Mot de passe">

                  @if ($errors->has('password'))
                      <span class="error">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif

              <div class="remember">
                  <span>Se souvenir de moi</span>
                  <div class="button r" id="button-3">
                      <input type="checkbox" name="remember" class="checkbox">
                      <div class="knobs"></div>
                      <div class="layer"></div>
                  </div>
              </div>










              <div class="btn_box">
                  <a class="forgot" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                  <button type="submit" class="btn purple">Login</button>
                  <a href="/" class="btn linealpurple">Précédent</a>
              </div>



                    </form>



@endsection
