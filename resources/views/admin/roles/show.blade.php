@extends('admin.base')

@section('content')

<h1>
    Roles
    <small>Permisos del Rol</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('roles.index') }}"><i class="fa fa-dashboard"></i>Listado Roles</a></li>
    <li class="active">Listado</li>
  </ol>
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Usuario
                </div>

                <div class="panel-body">
                <p> <strong>Nombre</strong> {{ $role->name }}</p>
                <p> <strong>Slug</strong> {{ $role->slug }}</p>
                <p> <strong>Descripción</strong> {{ $role->description }}</p>
                </div>
            </div>
        </div>
    </div>
 
@endsection 