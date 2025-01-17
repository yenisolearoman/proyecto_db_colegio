<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Intensidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('intensidad', 'Intensidad:') !!}
    {!! Form::number('intensidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tasignaturas.index') }}" class="btn btn-default">Cancel</a>
</div>
