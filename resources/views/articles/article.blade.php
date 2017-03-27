@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="jumbotron">
            <h2>{{$article->title}}</h2>
            <hr>
            <p>{!! $article->article !!}</p>
            <hr>
            <strong>{{$article->writer}}</strong>
        </div>
    </div>
@endsection