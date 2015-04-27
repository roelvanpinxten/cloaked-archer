@extends('app')

@section ('menu')
    @include('partials.appMenu', ['activeMenu'  => 'articles'])
@stop()

@section('content')

    <h1>Voeg een nieuw abonnement toe</h1>

    <hr/>
    {!! Form::model($subscription = new \App\Subscription, ['url' => 'subscription']) !!}
        @include('articles.partials.articlesForm', ['submitButtonText'  => 'Toevoegen'])
    {!! Form::close() !!}

@stop()