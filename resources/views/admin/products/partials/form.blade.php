<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/min/dropzone.min.css">
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
        <div class="form-group">
            <div class="dropzone"></div>
        </div>


        <hr>
        <div class="from-group">    
                
                {!! Form::submit('Guardar', ['class' => 'btn btn-block btn-primary']) !!}   
                
        </div>
    </div>

    
</div>




<script>
    var myDropzone=new Dropzone('.dropzone',{
         url: '/fotos/add',
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
 



