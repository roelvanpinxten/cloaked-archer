@extends('app')

@section ('menu')
    @include('partials.appMenu', ['activeMenu'  => 'articles'])
@stop()

@section('content')

    <h1>Bewerk een abonnement</h1>

    <hr/>
    {!! Form::model($articles, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $articles->id]]) !!}
    @include('articles.partials.articlesForm', ['submitButtonText'  => 'Bewerken'])
    {!! Form::close() !!}

@stop()
