@extends('admin.base')

@section('content')


<h1>
    Usuario
    <small>Usuario</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('users.index') }}"><i class="fa fa-dashboard"></i>Lista Usuarios</a></li>
    <li class="active">Listado</li>
  </ol>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Usuario
                </div>

                <div class="panel-body">
                <p> <strong>Nombre</strong> {{ $user->name }}</p>
                <p> <strong>Email</strong> {{ $user->email }}</p>
                </div>
            </div>
        </div>
    </div>
 
@endsection 