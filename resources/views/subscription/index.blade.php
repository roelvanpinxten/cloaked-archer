@extends('app')

@section ('menu')
    @include('partials.appMenu', ['activeMenu'  => 'subscription'])
@stop()

@section('content')

    <div class="container">
        <h4>Alle proposities</h4>
        @include('partials.subscriptionTable')
    </div>

    <div class="container">
        {!! Form::open(['url' => 'excel', 'role' => 'form', 'enctype' => 'multipart/form-data']) !!}
            @include('excel.partials.form', ['submitButtonText'  => 'Uploaden'])
        {!! Form::close() !!}

        <a href="/excel/download" class="btn btn-primary" role="button">Download</a>
    </div>  

@stop()