@extends('app')

@section ('menu')
    @include('partials.appMenu', ['activeMenu'  => 'upload'])
@stop()

@section('content')

    <h1>Voeg een nieuw abonnement of bundel toe</h1>

    {!! Form::open(['url' => 'excel', 'role' => 'form', 'enctype' => 'multipart/form-data']) !!}
        @include('excel.partials.form', ['submitButtonText'  => 'Uploaden'])
    {!! Form::close() !!}

@stop()