<!-- Id A Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_a', 'Id A:') !!}
    {!! Form::number('id_a', null, ['class' => 'form-control']) !!}
</div>

<!-- Id As Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_as', 'Id As:') !!}
    {!! Form::number('id_as', null, ['class' => 'form-control']) !!}
</div>

<!-- Id D Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_d', 'Id D:') !!}
    {!! Form::number('id_d', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tasignacions.index') }}" class="btn btn-default">Cancel</a>
</div>
