<li class="{{ Request::is('talumnos*') ? 'active' : '' }}">
    <a href="{{ route('talumnos.index') }}"><i class="fa fa-edit"></i><span>Talumnos</span></a>
</li>

<li class="{{ Request::is('tasignaturas*') ? 'active' : '' }}">
    <a href="{{ route('tasignaturas.index') }}"><i class="fa fa-edit"></i><span>Tasignaturas</span></a>
</li>

<li class="{{ Request::is('tdocentes*') ? 'active' : '' }}">
    <a href="{{ route('tdocentes.index') }}"><i class="fa fa-edit"></i><span>Tdocentes</span></a>
</li>

<li class="{{ Request::is('tasignacions*') ? 'active' : '' }}">
    <a href="{{ route('tasignacions.index') }}"><i class="fa fa-edit"></i><span>Tasignacions</span></a>
</li>

