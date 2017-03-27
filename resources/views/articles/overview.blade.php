@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h1>{{$title}}</h1>
            <hr>
            @foreach($articles as $key => $article)

                <div class="col-md-4">
                    <h4>{{$article->title}}</h4>
                    <hr>
                    <strong> {{ $subjects[$article->subject_id]->subject}}</strong>
                    <p>{!! substr($article->article,0,200) !!}...</p>
                    <div class="col-md-6 text-center"><a href="{{route('article',['id' => $article->id])}}">more...</a></div>
                    <div class="col-md-6 text-center">
                        @if(Auth::check())
                            <a href="{{route('edit-article',['id' => $article->id])}}"><span class="fa fa-pencil"></span> edit</a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
        <center>{{ $articles->links() }}</center>
        </div>
    </div>
@endsection