@extends('layout')

@section('content')




                <h1>Write Something ...</h1>
                <hr/>
                {!! Form::open(['url' => 'blog']) !!}
                <div class="form-group">
                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}

                </div>

                <div class="form-group">
                    {!! Form::label('body', 'Body:') !!}
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

                </div>

                <div class="form-group">
                    {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
                </div>


                {!! Form::close() !!}

                {{--{!! var_dump($errors) !!}--}}





    @if ($errors -> any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li> {{$error}} </li>
            @endforeach
        </ul>
    @endif
@stop