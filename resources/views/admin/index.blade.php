@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="jumbotron row">
            <h1>Admin</h1>
            <div class="col-md-4 text-center"><a href="{{route('create-article')}}"><h4>Create article</h4><span class="fa fa-wpforms fa-5x"></span></a></div>
            <div class="col-md-4 text-center"><h4>Overview</h4><span class="fa fa-bars fa-5x"></span></div>
            <div class="col-md-4 text-center"><a href="{{route('subjects-overview')}}"><h4>Subjects</h4><span class="fa fa-server fa-5x"></span></a></div>
        </div>
    </div>
@endsection
