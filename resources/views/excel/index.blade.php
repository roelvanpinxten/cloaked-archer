@extends('app')

@section ('menu')
    @include('partials.appMenu', ['activeMenu'  => 'excel'])
@stop()

@section('content')

    <div class="container">
        <p>{{ $results   }}</p>
    </div>

@stop()