@extends('admin.base')

@section('content')

<h1>
    Categorias
    <small>Categorias</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('categories.index') }}"><i class="fa fa-dashboard"></i> Listado de Categorias</a></li>
    <li class="active">Categoria</li>
  </ol>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   {{ $category->nombre }}
                </div>

                <div class="panel-body">
                <p> <strong>Nombre</strong> {{ $category->nombre }}</p>
                <p> <strong>Slug</strong> {{ $category->descripcion }}</p>
                <hr>
                
                
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection 