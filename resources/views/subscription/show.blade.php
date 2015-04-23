@extends('app')

@section ('menu')
    @include('partials.appMenu', ['activeMenu'  => 'subscription'])
@stop()

@section('content')

        <h2>Provider : {{ $providerName }}</h2>
        <p>Alle {{ $providerName }} abonnementartikelen.</p>
        @include('partials.subscriptionTable')

@stop()