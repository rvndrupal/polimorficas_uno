@extends('admin.base')

@section('content')


<h1>
    Nuevo
    <small>Usuario</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('users.index') }}"><i class="fa fa-dashboard"></i>Listado Usuarios</a></li>
    <li class="active">Listado</li>
  </ol>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Nuevo Usuario
                </div>

                <div class="panel-body">
                
                {!! Form::open(['route'=> 'users.store']) !!}

                @include('admin.users.partials.form')
                
                {!! Form::close() !!}
                
                
                </div>
            </div>
        </div>
    </div>

@endsection 