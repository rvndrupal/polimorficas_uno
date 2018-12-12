@extends('admin.base')

@section('content')
<h1>
        Imagenes
        <small>Crear Imagenes</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('seccion_unos.index') }}"><i class="fa fa-dashboard"></i> Listado de Imagenes</a></li>
        <li class="active">Imagenes</li>
      </ol>

    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Nuevo Producto
                </div>

                <div class="panel-body">
                
                {!! Form::open(['route'=> 'seccion_unos.store','files'=>true]) !!}

                @include('admin.seccionUno.partials.form')
                
                {!! Form::close() !!}
                
                
                </div>
            </div>
        </div>
    </div>

@endsection 

@section('scripts')
<script>
        $(function () {
          // Replace the <textarea id="editor1"> with a CKEditor
          // instance, using default configuration.
          CKEDITOR.replace('editor1')
          //bootstrap WYSIHTML5 - text editor
          $('.textarea').wysihtml5()
        })
      </script>

@endsection