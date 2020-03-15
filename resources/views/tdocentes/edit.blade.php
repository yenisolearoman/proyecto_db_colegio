@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tdocente
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tdocente, ['route' => ['tdocentes.update', $tdocente->id], 'method' => 'patch']) !!}

                        @include('tdocentes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection