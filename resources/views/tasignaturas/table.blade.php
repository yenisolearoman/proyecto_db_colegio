<div class="table-responsive">
    <table class="table" id="tasignaturas-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Intensidad</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tasignaturas as $tasignatura)
            <tr>
                <td>{{ $tasignatura->nombre }}</td>
            <td>{{ $tasignatura->intensidad }}</td>
                <td>
                    {!! Form::open(['route' => ['tasignaturas.destroy', $tasignatura->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tasignaturas.show', [$tasignatura->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tasignaturas.edit', [$tasignatura->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
