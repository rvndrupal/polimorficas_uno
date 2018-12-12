@extends('admin.base')

@section('content')

<h1>
    Roles
    <small>Crear nuevo Rol</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('roles.index') }}"><i class="fa fa-dashboard"></i>Listado Roles</a></li>
    <li class="active">Listado</li>
  </ol>
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Nuevo Rol
                </div>

                <div class="panel-body">
                
                {!! Form::open(['route'=> 'roles.store']) !!}

                @include('roles.partials.form')
                
                {!! Form::close() !!}
                
                
                </div>
            </div>
        </div>
    </div>
 
@endsection 