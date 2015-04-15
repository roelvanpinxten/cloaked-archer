<div class="form-group">
    {!! Form::label('provider_name', 'Provider: ') !!}
    {!! Form::text('provider_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('subscription_name', 'Propositie: ') !!}
    {!! Form::text('subscription_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('handset_name', 'Toestel: ') !!}
    {!! Form::text('handset_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('subscription_duration', 'Binding: ') !!}
    {!! Form::text('subscription_duration', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('subscription_minutes', 'Minuten: ') !!}
    {!! Form::text('subscription_minutes', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('subscription_data', 'Internet: ') !!}
    {!! Form::text('subscription_data', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('connection_fee', 'Aansluitkosten: ') !!}
    {!! Form::text('connection_fee', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('month_price_total', 'Maandprijs: ') !!}
    {!! Form::text('month_price_total', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('month_price_action', 'Maandprijs actie: ') !!}
    {!! Form::text('month_price_action', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('month_price_handset', 'Maandprijs handset: ') !!}
    {!! Form::text('month_price_handset', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('month_price_subscription', 'Maandprijs abonnement: ') !!}
    {!! Form::text('month_price_subscription', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('handset_price_without_subscription', 'Handset prijs los: ') !!}
    {!! Form::text('handset_price_without_subscription', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('handset_price_with_subscription', 'Handset prijs met abonnement: ') !!}
    {!! Form::text('handset_price_with_subscription', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('valid_until', 'Geldig t/m: ') !!}
    {!! Form::input('date', 'valid_until', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>