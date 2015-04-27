@extends('app')

@section ('menu')
    @include('partials.appMenu', ['activeMenu'  => 'articles'])
@stop()

@section('content')

        <h4>Alle proposities</h4>
        @include('articles.partials.articlesTable')

@stop()