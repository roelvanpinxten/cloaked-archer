@extends('app')

@section ('menu')
    @include('partials.appMenu')
@stop()

@section('content')

    <div class="container">
        <p>Alle proposities.</p>
        @include('partials.subscriptionTable')
    </div>

@stop()