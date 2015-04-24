<div class="form-group">
    {!! Form::label('excel', 'Kies bestand: ') !!}
    {!! Form::file('excel', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>