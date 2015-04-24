<?php
    function split_number_int ( $string )
    {
        $number = explode( '.', $string );
        return trim( $number[0] );
    }

    function split_number_fraction ( $string )
    {
        $number = explode( '.', $string );
        return trim( $number[1] );
    }
?>

@extends('app')

@section ('menu')
    @include('partials.appMenu', ['activeMenu'  => 'subscription'])
@stop()

@section('content')

<h2>Tele2</h2>
<div class="aboBody">
@foreach ($subscription as $sub)
    @if ($sub->provider_name == "Tele2")
        @include('pages.partials.aboItem')
    @endif
@endforeach
</div>

<h1 style="clear:both;">KPN</h1>
<div class="aboBody">
@foreach ($subscription as $sub)
    @if ($sub->provider_name == "KPN")
        @include('pages.partials.aboItem')
    @endif
@endforeach
</div>

<h1 style="clear:both;">T-Mobile</h1>
<div class="aboBody">
@foreach ($subscription as $sub)
    @if ($sub->provider_name == "T-Mobile")
        @include('pages.partials.aboItem')
    @endif
@endforeach
</div>
@stop()