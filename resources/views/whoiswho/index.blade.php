@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Who is Who</h1>
            @for($i = 0; $i<10;$i++)
            <div class="col-md-4 text-center">
                <img src="{{asset('/img/personal/images.png')}}" alt="">
                <p>naam</p>
                <p>functie</p>
            </div>
            @endfor
        </div>
    </div>
@endsection
