@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="jumbotron">
            <h2>{{$article->title}}</h2>
            @if(auth::check())
            <a href="{{route('upload-image',['id'=>$article->id])}}">
                <i class="fa fa-plus" aria-hidden="true"></i> <i class="fa fa-file-image-o" aria-hidden="true"></i>
            </a>
            @endif
            <hr>
            @if($images->count() == 1)
                <img src="{{asset($images[0]->path)}}" class="img-responsive max-height-400 " alt="">
                <br>
            @elseif($images->count() > 1)
                <div class="row">
                @include('articles.partial.carousel')
                    <br>
                </div>
            @endif

                <p>{!! $article->article !!}</p>
                <hr>
                <strong>{{$article->writer}}</strong>
        </div>
        @if(Auth::check() && $images->count())
            {{Form::open(array('url' => route('delete-images'), 'method' => 'POST'))}}
            <div class="jumbotron ">
                <div class="row">

                        @foreach($images as $key => $image)
                            <div class="col-md-3">
                                {{Form::checkbox('id[]',$image->id)}}
                                <img src="{{asset($image->path)}}" class="img-responsive"> </img>
                            </div>
                        @endforeach
                </div>
                {{Form::submit('delete',['class' => 'btn btn-default'])}}
            </div>
            {{Form::close()}}
        @endif
    </div>
@endsection