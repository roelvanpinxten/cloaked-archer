@extends('app')

@section ('menu')
    @include('partials.appMenu')
@stop()

@section('content')

    <h1>Voeg een nieuwe propositie toe</h1>

    <hr/>
    {!! Form::open(['url' => 'subscription']) !!}
        @include('partials.subscriptionForm', ['submitButtonText'  => 'Toevoegen'])
    {!! Form::close() !!}

@stop()