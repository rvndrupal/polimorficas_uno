@extends('admin.base')

@section('content')


<h1>
   Imagenes
    <small>Sección Principal</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Listado de Imagenes</a></li>
    <li class="active">Listado</li>
  </ol>

  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Todos las Imagenes</h3>
      Productos
      @can('seccionUno.create')
      <a href="{{ route('seccion_unos.create') }}" class="btn btn-sm btn-primary pull-right">Nuevo</a>
      @endcan
    </div>
    <!-- /.box-header -->
    <div class="box-body">
           
      <table id="seccion_table" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>BANNER</th>
          <th>IMAGEN BLOQUE UNO</th>
          <th>ACCIONES</th>
         
        </tr>
        </thead>
        <tbody>
            @foreach ($secciones as $seccion )
            <tr>
                    <td>{{ $seccion->id }}</td>
                    <td>
                        @if($seccion->banner)
                        <img src="{{ $seccion->banner }}" class="foto_seccion">
                        @endif
                    </td>
                    <td>
                        @if($seccion->imguno)
                        <img src="{{ $seccion->imguno }}" class="foto_seccion">
                        @endif
                    </td>
                  
                    
                    <td width="150px">
                        {{-- @can('seccion_unos.show')
                        <a href="{{ route('seccion_unos.show', $seccion->id) }}" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                        @endcan   --}}
                        {{-- @can('seccion_unos.edit')
                        <a href="{{ route('seccion_unos.edit', $seccion->id) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                         @endcan --}}

                         @can('seccion_unos.destroy')
                                    
                         {!! Form::open(['route'=>['seccion_unos.destroy', $seccion->id],
                         'method'=>'DELETE']) !!}
                         <button class="btn btn-xs btn-danger" style="margin: 23px 0 0 21px;; position:absolute"><i class="fa fa-times"></i></button>
                         
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


  