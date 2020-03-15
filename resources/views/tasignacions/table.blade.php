<div class="table-responsive">
    <table class="table" id="tasignacions-table">
        <thead>
            <tr>
                <th>Id A</th>
        <th>Id As</th>
        <th>Id D</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tasignacions as $tasignacion)
            <tr>
                <td>{{ $tasignacion->id_a }}</td>
            <td>{{ $tasignacion->id_as }}</td>
            <td>{{ $tasignacion->id_d }}</td>
                <td>
                    {!! Form::open(['route' => ['tasignacions.destroy', $tasignacion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tasignacions.show', [$tasignacion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tasignacions.edit', [$tasignacion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
