@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Productos
                    @can('products.create')
                    <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary pull-right">Nuevo</a>
                    @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($products as $producto )
                            <tr>
                                <td>{{ $producto->id }}</td>
                                <td>{{ $producto->name }}</td>
                                <td width="10px">
                                @can('products.show')
                                    <a href="{{ route('products.show', $producto->id) }}" class="btn btn-sm btn-default">Ver</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('products.edit')
                                    <a href="{{ route('products.edit', $producto->id) }}" class="btn btn-sm btn-default">Editar</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('products.destroy')
                                    
                                {!! Form::open(['route'=>['products.destroy', $producto->id],
                                'method'=>'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                
                                {!! Form::close() !!}                               
                                    
                                @endcan
                                </td>

                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>

                    {{ $products->render() }}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection