<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<h1>Productos</h1>


<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripción</th>
        <th scope="col">Categoría</th>
        <th scope="col">Tamaño</th>
        <th scope="col">Precio</th>
        <th scope="col">Imágen</th>
       
      </tr>
    </thead>
    <tbody>
    @foreach ($productos as $pro)
      <tr>
        <th scope="row">{{ $pro->id }}</th>
        <td>{{ $pro->nombre }}</td>
        <td>{!! $pro->descripcion !!}</td>
        <td>{!! $pro->category->nombre !!}</td>
        <td>{{ $pro->tamano }}</td>
        <td>{{ $pro->precio }}</td>
        {{-- {{  dd($pro->fotos->first()->url) }} --}}
        <td><img style="width:100px" src="./{{ $pro->fotos->first()->url }}" alt=""></td>
        {{--  <img src="'. public_path() .'/uploads/yanUMHcK4UqBp2Wg8EZ4fr87N.jpg">
        storage_path  --}}
      </tr>

      @endforeach
     
    </tbody>
  </table>

  <h1>Total de Productos  {{  $pro->count() }}</h1>
  
  