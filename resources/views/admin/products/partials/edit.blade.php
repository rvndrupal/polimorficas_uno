<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/min/dropzone.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>



<form action="products.edit" method="POST">
<div class="row">

    <div class="col-md-9">
        <div class="from-group {{ $errors->has('nombre') ? 'has-error': '' }}">    
            {!! Form::label('nombre','Nombre del Producto') !!}
            
            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}   

            {{--  {!! $errors->first('name','<span class="alert-danger">:message</span>') !!}  funciona--}}
            
        </div>

        <div class="from-group {{ $errors->has('descripcion') ? 'has-error': '' }}">    
                {!! Form::label('descripcion','Descripción del Producto') !!}
                
                {!! Form::textarea('descripcion', null, ['class' => 'form-control ', 'id'=>'editor1']) !!}   

                 {!! $errors->first('descripcion','<span class="alert-danger">:message</span>') !!}  
                
        </div>

       

        <div class="from-group">    
            {!! Form::label('iframe','Video') !!}
            
            {!! Form::text('iframe', null, ['class' => 'form-control']) !!}   
            
        </div>
        


    </div>

    <div class="col-md-3">
       
        <div class="from-group {{ $errors->has('tamano') ? 'has-error': '' }}">    
            {!! Form::label('tamano','Tamaño') !!}
            
            {!! Form::text('tamano', null, ['class' => 'form-control ']) !!}   

             {!! $errors->first('tamano','<span class="alert-danger">:message</span>') !!}  
            
         </div>

         <div class="from-group {{ $errors->has('precio') ? 'has-error': '' }}">    
            {!! Form::label('precio','Precio') !!}
            
            {!! Form::text('precio', null, ['class' => 'form-control ']) !!}   

             {!! $errors->first('precio','<span class="alert-danger">:message</span>') !!}  
            
         </div>

         <div class="from-group {{ $errors->has('color') ? 'has-error': '' }}">    
            {!! Form::label('color','Color') !!}
            
            {!! Form::text('color', null, ['class' => 'form-control ']) !!}   

             {!! $errors->first('color','<span class="alert-danger">:message</span>') !!}  
            
         </div>

         <div class="from-group {{ $errors->has('peso') ? 'has-error': '' }}">    
            {!! Form::label('peso','Peso') !!}
            
            {!! Form::text('peso', null, ['class' => 'form-control ']) !!}   

             {!! $errors->first('peso','<span class="alert-danger">:message</span>') !!}  
            
         </div>
       

        <div class="from-group">    
            {!! Form::label('category_id','Categorías') !!}
            
            {!! Form::select('category_id', $categories , null , ['class' => 'form-control']) !!}   <!--Se obtiene la categoria-->
            
        </div>

        <hr>
        <div class="form-group ocultar">
            <div class="dropzone"></div>
        </div>


        <hr>
        <div class="from-group">    
                
                {!! Form::submit('Guardar', ['class' => 'btn btn-block btn-primary']) !!}   
                
        </div>
    </div>

    
</div>
</form>

<hr>

<div class="row">

        @foreach ($product->fotos as  $foto)
            @if($product->fotos->count()>=3)
                <script>
                    $(".ocultar").hide();
                </script>
            @else
                <script>
                    $(".ocultar").show(1500);
                </script>
            @endif

        <form method="POST" action="{{ route('fotos.destroy', $foto) }}" >
            {{ method_field('DELETE') }} {{ csrf_field() }}
            <div class="col-lg-2">
                <button class="btn-sm btn-danger" style="position:absolute"><i class="fa fa-remove"></i>
                </button>
                <img class="img-responsive" src="{{  Request::root()}}/{{ $foto->url }}" alt="">
            </div>
        </form>
        @endforeach
        
        </div>




<script>
    var myDropzone=new Dropzone('.dropzone',{
         url: '/fotos/{{ $product->id}}/edit',
         acceptedFiles: 'image/jpeg,image/png,image/jpg',  
         maxFilesize: 2,
         paramName: 'foto',
         maxFiles:3,
        // addRemoveLinks: true,
 
         headers:{
             'X-CSRF-TOKEN':'{{ csrf_token() }}'
         },
        
         dictDefaultMessage:"Arrastra la Fotos  ó Presiona Aqui",
     });
 
   
     Dropzone.autoDiscover=false;
   </script>
 



