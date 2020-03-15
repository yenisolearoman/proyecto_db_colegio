<div class="table-responsive">
    <table class="table" id="tdocentes-table">
        <thead>
            <tr>
                <th>Nombres</th>
        <th>Aula</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tdocentes as $tdocente)
            <tr>
                <td>{{ $tdocente->nombres }}</td>
            <td>{{ $tdocente->aula }}</td>
                <td>
                    {!! Form::open(['route' => ['tdocentes.destroy', $tdocente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tdocentes.show', [$tdocente->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tdocentes.edit', [$tdocente->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
