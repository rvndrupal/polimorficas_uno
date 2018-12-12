@extends('admin.base')

@section('content')
<h1>
        Noticias
        <small>Nueva </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('personas.index') }}"><i class="fa fa-dashboard"></i> Listado de las Noticias</a></li>
        <li class="active">Categoria</li>
      </ol>
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Nueva Noticia
                </div>

                <div class="panel-body">
                
                {!! Form::open(['route'=> 'personas.store','files'=>true]) !!}

                @include('admin.personas.partials.form')
                
                {!! Form::close() !!}
                
                
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection 