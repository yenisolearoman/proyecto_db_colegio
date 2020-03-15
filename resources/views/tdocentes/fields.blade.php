<!-- Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombres', 'Nombres:') !!}
    {!! Form::text('nombres', null, ['class' => 'form-control']) !!}
</div>

<!-- Aula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aula', 'Aula:') !!}
    {!! Form::number('aula', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tdocentes.index') }}" class="btn btn-default">Cancel</a>
</div>
