<div class="form-group">
    {!! Form::label('facebook_id', 'Id du groupe Facebook', ['class' => 'control-label']) !!}
    {!! Form::text('facebook_id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('year', 'Annee de la promotion', ['class' => 'control-label']) !!}
    {!! Form::input('number', 'year', $date, ['class' => 'form-control']) !!}
</div>

{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}