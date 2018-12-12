@extends('admin.base')

@section('content')

<h1>
        Editar 
        <small>Imagen</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('seccion_unos.index') }}"><i class="fa fa-dashboard"></i> Listado de Imagenes</a></li>
        <li class="active">Imagen  ID-> {{ $seccionUno->id }}</li>
      </ol>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Editar Imagen
                </div>

                <div class="panel-body">
                
                {!! Form::model($seccionUno, ['route'=> ['seccion_unos.update', $seccionUno->id],
                 'method'=>'PUT']) !!}

                @include('admin.products.partials.form')
                
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