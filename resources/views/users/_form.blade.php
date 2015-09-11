<div class="form-group">
    {!! Form::label('promotion_id', 'Annee de la promotion', ['class' => 'control-label']) !!}
    {!! Form::select('promotion_id', $promotions, $user->promotion->id, ['class' => 'form-control']) !!}
</div>

{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}