@extends('app')

@section ('menu')
    @include('partials.appMenu')
@stop()

@section('content')

    <h1>Bewerk artikel</h1>

    <hr/>
    {!! Form::model($provider, ['method' => 'PATCH', 'action' => ['ProviderController@update', $provider->id]]) !!}
        @include('partials.providerForm', ['submitButtonText'  => 'Bewerken'])
    {!! Form::close() !!}

@stop()
