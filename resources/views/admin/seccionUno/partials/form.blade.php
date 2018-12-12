<div class="row">

    <div class="col-sm-6">

        <div class="from-group" {{ $errors->has('banner') ? 'has-error': '' }}>    
            {!! Form::label('banner','Imagen Banner') !!}
            
            {!! Form::file('banner') !!}   

             {{--  {!! $errors->first('name','<span class="alert-danger">:message</span>') !!}  funciona--}}
        
        </div>
    </div>

    <div class="col-sm-6">
        <div class="from-group" {{ $errors->has('imguno') ? 'has-error': '' }}>    
                {!! Form::label('imguno','Imagen bloque uno') !!}
                
                {!! Form::file('imguno') !!}   
    
                 {{--  {!! $errors->first('name','<span class="alert-danger">:message</span>') !!}  funciona--}}
            
            </div>
    </div>
    <hr>
    <br>
    <br>
        <div class="from-group">    
                
                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}   
                
        </div>
    </div>

    
</div>




