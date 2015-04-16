@extends('app')

@section ('menu')
    @include('partials.appMenu', ['activeMenu'  => 'provider'])
@stop()

@section('content')

    <h1>Voeg een nieuw abonnement of bundel toe</h1>

    <hr/>
    {!! Form::open(['url' => 'provider']) !!}
        @include('partials.providerForm', ['submitButtonText'  => 'Toevoegen'])
    {!! Form::close() !!}

@stop()