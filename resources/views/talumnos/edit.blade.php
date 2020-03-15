@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Talumno
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($talumno, ['route' => ['talumnos.update', $talumno->id], 'method' => 'patch']) !!}

                        @include('talumnos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection