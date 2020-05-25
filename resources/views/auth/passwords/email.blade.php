@extends('layouts.app')

<!-- Main Content -->
@section('content')


    <form class="form" role="form" method="POST" action="{{ url('/password/email') }}">
        {{ csrf_field() }}

        <input id="email" placeholder="Mail" type="email" class="form-input" name="email" value="{{ old('email') }}">

        @if ($errors->has('email'))
            <span class="error">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
<div class="btn_box">
        <button type="submit" class="btn purple">
            Envoyer
        </button>
</div>

    </form>

@endsection
