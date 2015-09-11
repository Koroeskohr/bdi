<div class="form-group">
    {!! Form::label('title', 'Titre : ', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('excerpt', 'Chapo : ', ['class' => 'control-label']) !!}
    {!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Corps : ', ['class' => 'control-label']) !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at', 'Date de publication : ', ['class' => 'control-label']) !!}
    {!! Form::input('date', 'published_at', \Carbon\Carbon::now()->toDateString(), ['class' => 'form-control']) !!}
</div>

{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}