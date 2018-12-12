@extends('admin.base')

@section('content')

<h1>
    Editar 
    <small>Role</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('roles.index') }}"><i class="fa fa-dashboard"></i>Listado Roles</a></li>
    <li class="active">Listado</li>
  </ol>
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Editar Roles
                </div>

                <div class="panel-body">
                
                {!! Form::model($role, ['route'=> ['roles.update', $role->id],
                 'method'=>'PUT']) !!}

                @include('roles.partials.form')
                
                {!! Form::close() !!}
                
                
                </div>
            </div>
        </div>
    </div>
 
@endsection 