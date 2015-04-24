<div class="form-group">
    {!! Form::label('provider', 'Provider: ') !!}
    {!! Form::text('provider', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('type', 'Type: ') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('name', 'Naam: ') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('handset_category', 'Handset Categorie: ') !!}
    {!! Form::text('handset_category', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('commission', 'Commissie: ') !!}
    {!! Form::text('commission', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('valid_until', 'Geldig t/m: ') !!}
    {!! Form::input('date', 'valid_until', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>