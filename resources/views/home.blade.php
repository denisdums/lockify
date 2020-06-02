
@extends('layouts.home')


@section('content')

    <div class="template_grid">
        @php
            $i=0;
        @endphp
        @foreach ($metiers as $m)
            @php($i++)
            <a href="/charcuterie" class="grid{{$i}}"><img src="{{$m -> image}}" alt="{{$m -> nom}}"><span>{{$m -> nom}}</span></a>
            @php
                if($i %9 ==0){
                  $i =0;
                  echo "</div><div class='template_grid'>";
              }
            @endphp
        @endforeach
    </div>

@endsection
