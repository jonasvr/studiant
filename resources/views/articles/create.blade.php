@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="jumbotron row">
            <div class="col-md-offset-1 col-md-10">
                {{Form::open(array('url' => route('update-article'), 'method' => 'POST','files' => true))}}
                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                        <label for="title">title</label>
                            <input id="title" type="title" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                            @if ($errors->has('title'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                            @endif
                    </div>
                    <div class="form-group {{ $errors->has('article') ? ' has-error' : '' }}">
                        <label for="article">article</label>
                        {{ Form::textarea('article',old('article'),['class' => 'form-control article','id'=>'article']) }}
                        @if ($errors->has('article'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('article') }}</strong>
                                    </span>
                        @endif
                    </div>
                <div class="form-group {{ $errors->has('writer') ? ' has-error' : '' }}">
                    <label for="writer">writer</label>
                    <input id="writer" type="writer" class="form-control" name="writer" value="{{ old('writer') }}" required autofocus>

                    @if ($errors->has('writer'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('writer') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="subjects">subjects</label>
                    {{Form::select('subject_id',$subjects_id,["class" => 'form-control'])}}
                </div>
                {{Form::submit('submit',['class' => 'btn btn-default'])}}
                {{Form::close()}}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.article').summernote({
                height:300,
            });
        });
    </script>
@endsection