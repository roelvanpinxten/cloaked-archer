<div class="form-group">
    {!! Form::label('provider_name', 'Provider: ') !!}
    {!! Form::text('provider_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('subscription', 'subscription: ') !!}
    {!! Form::text('subscription', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('subscription_type', 'subscription_type: ') !!}
    {!! Form::text('subscription_type', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('binding', 'binding: ') !!}
    {!! Form::text('binding', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('commission', 'Commissie: ') !!}
    {!! Form::text('commission', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('month_price', 'month_price: ') !!}
    {!! Form::text('month_price', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('month_price_action', 'month_price_action: ') !!}
    {!! Form::text('month_price_action', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('BAS_item_number', 'BAS_item_number: ') !!}
    {!! Form::text('BAS_item_number', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('valid_until', 'Geldig t/m: ') !!}
    {!! Form::text('valid_until', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>