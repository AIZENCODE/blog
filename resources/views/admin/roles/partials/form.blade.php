
            <div class="form-group">
                {!!form::label('name','Nombre' )!!}
                {!!form::text('name',null,['class' =>'form-control', 'placeholder' =>'Ingrese el nombre del Rol'] )!!}
            
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
           
                <p class="font-weight-bold">Lista de Permisos</p>
    
                @foreach ($permissions as $permission)
                
                <div class="">

                    <label class="mr-2">
                        {!! Form::checkbox('permissions[]',$permission->id,null)!!}
                        {{$permission->description}}
                    </label>
                </div>
                @endforeach
                
            </div>
    
            @error('permissions')
            <small class="text-danger">{{$message}}</small>
            @enderror

    