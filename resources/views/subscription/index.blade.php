@extends('app')

@section ('menu')
    @include('partials.appMenu', ['activeMenu'  => 'subscription'])
@stop()

@section('content')

    <div class="container">
        <h4>Alle proposities</h4>
        @include('partials.subscriptionTable')
    </div>

@stop()