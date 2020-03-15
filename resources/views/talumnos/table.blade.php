<div class="table-responsive">
    <table class="table" id="talumnos-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Fecha Nac</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($talumnos as $talumno)
            <tr>
                <td>{{ $talumno->nombre }}</td>
            <td>{{ $talumno->fecha_nac }}</td>
                <td>
                    {!! Form::open(['route' => ['talumnos.destroy', $talumno->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('talumnos.show', [$talumno->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('talumnos.edit', [$talumno->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
