@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tasignatura
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tasignatura, ['route' => ['tasignaturas.update', $tasignatura->id], 'method' => 'patch']) !!}

                        @include('tasignaturas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection