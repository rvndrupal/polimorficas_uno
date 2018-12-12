@extends('admin.base')

@section('content')


<h1>
    Productos
    <small>Todos los Productos</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Productos</a></li>
    <li class="active">Listado</li>
  </ol>

  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Todos los Productos</h3>
      Productos
      @can('products.create')
      <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary pull-right">Nuevo</a>
      @endcan
    </div>
    <!-- /.box-header -->
    <div class="box-body">
           
      <table id="productos_table" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>DESCRIPCIÓN</th>
          <th>CATEGORÍA</th>
          <th>PUBLICACIÓN</th>
          <th>ACCIONES</th>
         
        </tr>
        </thead>
        <tbody>
           
            @foreach ($products as $producto )
            <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <?php $des=str_limit($producto->descripcion,200); ?>                   
                    <td>{!! $des !!}</td>
                    <td>{!! $producto->category->nombre !!}</td>
                    <td>{{ $producto->created_at }}</td>
                    <td width="150px">
                        @can('products.show')
                        <a href="{{ route('products.show', $producto->id) }}" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                        @endcan  
                        @can('products.edit')
                        <a href="{{ route('products.edit', $producto->id) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                         @endcan

                         @can('products.destroy')
                                    
                         {!! Form::open(['route'=>['products.destroy', $producto->id],
                         'method'=>'DELETE']) !!}
                         <button class="btn btn-xs btn-danger" style="margin: -22px 0 0 51px; position:absolute"><i class="fa fa-times"></i></button>
                         
                         {!! Form::close() !!}                               
                             
                         @endcan
                    </td>

                </tr>
            @endforeach
        
       
        
        </tbody>
        
      </table>
    </div>
    <!-- /.box-body -->
  </div>


@endsection

@section('scripts')

<script>
        $(function () {
          $('#productos_table').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : true
          })
        })
      </script>
@endsection


  