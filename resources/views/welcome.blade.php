@extends('layouts.app')

@section('content')

    {!! Form::open(['route' => 'keyword']) !!}
        <div class="form-group">
        {!! Form::label('keyword', '合言葉') !!}
        {!! Form::text('keyword', null, ['class' => 'form-control']) !!}
        </div>
        <div class="text-right">
            {!! Form::submit('送信', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! form::close() !!}

@endsection