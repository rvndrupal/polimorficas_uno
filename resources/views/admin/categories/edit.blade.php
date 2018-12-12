@extends('admin.base')

@section('content')
<h1>
        Categorias
        <small>Nueva </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('categories.index') }}"><i class="fa fa-dashboard"></i> Listado de las Categorias</a></li>
        <li class="active">Categoria</li>
      </ol>
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Actualizar Categoría
                </div>

                <div class="panel-body">
                
                {!! Form::model($category, ['route'=> ['categories.update', $category->id],
                 'method'=>'PUT']) !!}

                @include('admin.categories.partials.form')
                
                {!! Form::close() !!}
                
                
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection 