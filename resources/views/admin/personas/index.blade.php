@extends('admin.base')

@section('content')


<h1>
   Noticias
    <small>Sección Principal</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Listado de Noticias</a></li>
    <li class="active">Notas</li>
  </ol>

  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Todos las Noticias</h3>
      Productos
      @can('personas.create')
      <a href="{{ route('personas.create') }}" class="btn btn-sm btn-primary pull-right">Nuevo</a>
      @endcan
    </div>
    <!-- /.box-header -->
    <div class="box-body">
           
      <table id="seccion_table" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>TÍTULO</th> 
          <th>SUB UNO</th>
          <th>SUB DOS</th>         
          <th>ACCIONES</th>
         
        </tr>
        </thead>
        <tbody>
            @foreach ($personas as $c )
            <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->nombre }}</td>
                    <td>{{ $c->apellidos }}</td>
                    <td>{{ $c->descripcion }}</td>


                    <td width="150px">
                        @can('personas.show')
                        <a href="{{ route('personas.show', $c->id) }}" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                        @endcan  
                        @can('personas.edit')
                        <a href="{{ route('personas.edit', $c->id) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                         @endcan

                         @can('personas.destroy')
                         {!! Form::open(['route'=>['personas.destroy', $c->id],
                         'method'=>'DELETE']) !!}
                         <button class="btn btn-xs btn-danger" style="margin:-22px 0 0 51px; position:absolute"><i class="fa fa-times"></i></button>
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
          $('#seccion_table').DataTable({
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


  