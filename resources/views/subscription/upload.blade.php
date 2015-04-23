@extends('app')

@section ('menu')
    @include('partials.appMenu', ['activeMenu'  => 'upload'])
@stop()

@section('content')

    <h1>Upload</h1>

    <hr />
    {!! Form::open(['url' => 'subscription/upload/store', 'role' => 'form', 'enctype' => 'multipart/form-data']) !!}
        @include('subscription.partials.form', ['submitButtonText'  => 'Uploaden'])
    {!! Form::close() !!}

@stop()