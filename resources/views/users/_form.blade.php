<div class="form-group">
    {!! Form::label('promotion', 'Annee de la promotion', ['class' => 'control-label']) !!}
    {!! Form::select('promotion', $promotions, $user->promotion->id, ['class' => 'form-control']) !!}
</div>

{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}