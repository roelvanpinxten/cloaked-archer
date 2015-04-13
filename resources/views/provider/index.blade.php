@extends('app')

@section ('menu')
    @include('partials.appMenu')
@stop()

@section('content')

    <div class="container">
        <p>Alle abonnementartikelen.</p>
        @include('partials.providerTable')
    </div>

@stop()