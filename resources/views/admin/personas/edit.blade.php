@extends('admin.base')

@section('content')
<h1>
       Noticias
        <small>Nueva </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('categories.index') }}"><i class="fa fa-dashboard"></i> Listado de las Noticias</a></li>
        <li class="active">Noticias</li>
      </ol>
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Actualizar Noticia
                </div>

                <div class="panel-body">
                
                {!! Form::model($persona, ['route'=> ['personas.update', $persona->id],
                 'method'=>'PUT','files'=>true]) !!}

                @include('admin.personas.partials.form')
                
                {!! Form::close() !!}
                
                
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection 