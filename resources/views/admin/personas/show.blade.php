@extends('admin.base')

@section('content')

<h1>
    Persona
    <small>Persona</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('personas.index') }}"><i class="fa fa-dashboard"></i> Listado de Personas</a></li>
    <li class="active">Persona</li>
  </ol>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                   {{ $persona->nombre }}
                </div>

                <div class="panel-body">
                <p> <strong>Nombre</strong> {{ $persona->apellidos }}</p>
                <p> <strong>Slug</strong> {{ $persona->descripcion }}</p>
                <hr>
                
                
                </div>
            </div>
        </div>
        <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    @if($persona->imguno)
                    <img style="width:150px; height:100px" src="{{ $persona->imguno }}">
                    @endif

                    @if($persona->imgdos)
                    <img style="width:150px; height:100px" src="{{ $persona->imgdos }}">
                    @endif
                    </div>
                </div>
        </div>
    </div>
</div>   
@endsection 