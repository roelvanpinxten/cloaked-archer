@extends('app')

@section ('menu')
    @include('partials.appMenu')
@stop()

@section('content')

    <h1>Bewerk propositie</h1>

    <hr/>
    {!! Form::model($subscription, ['method' => 'PATCH', 'action' => ['SubscriptionController@update', $subscription->id]]) !!}
        @include('partials.subscriptionForm', ['submitButtonText'  => 'Bewerken'])
    {!! Form::close() !!}

@stop()
