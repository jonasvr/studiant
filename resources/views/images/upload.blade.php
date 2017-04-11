@extends('layouts.app')

@section('content')

    <div class="container">

        {{Form::open(array('url' => route('add-image'), 'method' => 'POST', "class" => "form-horizontal", "files"=>true))}}
        <div class="form-group {{ $errors->has('img') ? ' has-error' : '' }}">
            {{Form::label('img', 'img',["class" => "control-label"])}}
            <div class="col-md-offset-1 col-md-11">
                {{Form::file('img',["class" => "form-control"])}}
                @if ($errors->has('img'))
                    <span class="help-block">
                                <strong>{{ $errors->first('img') }}</strong>
                            </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-1 col-md-11">
                <button type="submit" class="btn btn-default">update</button>
            </div>
        </div>
        {{Form::hidden('id',$id)}}
        {{Form::close()}}
    </div>
@endsection