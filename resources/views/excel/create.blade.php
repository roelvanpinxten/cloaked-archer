@extends('app')

@section ('menu')
    @include('partials.appMenu', ['activeMenu'  => 'upload'])
@stop()

@section('content')

    <h1>Voeg een nieuw abonnement of bundel toe</h1>

    <hr/>
    {!! Form::open(['url' => 'excel', 'role' => 'form']) !!}
        @include('excel.partials.form', ['submitButtonText'  => 'Uploaden'])
    {!! Form::close() !!}

@stop()