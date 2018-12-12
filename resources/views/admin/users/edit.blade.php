@extends('admin.base')

@section('content')


<h1>
    Editar
    <small>Usuario</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('users.index') }}"><i class="fa fa-dashboard"></i>Listado Usuarios</a></li>
    <li class="active">Listado</li>
  </ol>
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                   usuario
                </div>

                <div class="panel-body">
                
                {!! Form::model($user, ['route'=> ['users.update', $user->id],
                 'method'=>'PUT']) !!}

                @include('admin.users.partials.form')
                
                {!! Form::close() !!}
                
                
                </div>
            </div>
        </div>
    </div>
  
@endsection 