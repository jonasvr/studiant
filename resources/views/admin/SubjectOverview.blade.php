@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="jumbotron row">
            <h1>subjects</h1>
            {{Form::open(array('url' => route('subject-add'), 'method' => 'POST'))}}
            <div class="form-group {{ $errors->has('subject') ? ' has-error' : '' }}">
                <label for="subject">New subject</label>
                <input id="subject" type="subject" class="form-control" name="subject" value="{{ old('subject') }}" required autofocus>

                @if ($errors->has('subject'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                @endif
            </div>
            {{Form::submit('submit',['class' => 'btn btn-default'])}}
            {{Form::close()}}
            <hr>
            <table class="table table-striped">
                <tr>
                    <th>title</th>
                    {{--<th><span class="fa fa-pencil"></span></th>--}}
                    <th><span class="fa fa-times"></span></th>
                </tr>
                @foreach($subjects as $key => $subtject)
                <tr>
                    <td>{{$subtject->subject}}</td>
                    {{--<td><span class="fa fa-pencil"></span></td>--}}
                    <td><a href="{{route('subjects-delete',['id'=>$subtject->id])}}"><span class="fa fa-times"></span></a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
