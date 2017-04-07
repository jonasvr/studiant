@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="jumbotron row">
            <h1>subjects</h1>
            <hr>
            <table class="table table-striped">
                <tr>
                    <th>title</th>
                    <th>Subject</th>
                    <th>Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($articles as $key => $article)
                    <tr>
                        <td>{{$article->title}}</td>
                        <td>{{$subjects[$article->subject_id]->subject}}</td>
                        <td>{{explode(' ',$article->created_at)[0]}}</td>
                        <td><a href="{{route('edit-article',['id'=>$article->id])}}"><span class="fa fa-pencil"></span></a></td>
                        <td><a href="{{route('article-delete',['id'=>$article->id])}}"><span class="fa fa-times"></span></a></td>
                    </tr>
                @endforeach
            </table>
            <center>{{ $articles->links() }}</center>

        </div>
    </div>
@endsection
