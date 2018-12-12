@extends('admin.base')

@section('content')


<h1>
    Productos
    <small>Producto</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('products.index') }}"><i class="fa fa-dashboard"></i> Listado de Productos</a></li>
    <li class="active">Producto</li>
  </ol>

{{--  <div class="container">  --}}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Producto
                </div>

                <div class="panel-body">
                <p> <strong>Nombre</strong> {{ $product->name }}</p>
                <p> <strong>Descripción</strong> {!! $product->description !!}</p>
                </div>
            </div>
        </div>
    </div>
{{--  </div>     --}}
@endsection 