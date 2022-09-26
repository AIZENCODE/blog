
        <div class="form-group">
            {!! Form::label('name','Nombre')!!}
            {!! Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Post'])!!}
        </div>
        
        @error('name')
            <small class="text-danger">{{$message}}</small>
        @enderror

        <div class="form-group">
            {!! Form::label('slug','Slug')!!}
            {!! Form::text('slug',null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del Post','readonly'])!!}
        </div>

        @error('slug')
        <small class="text-danger">{{$message}}</small>
        @enderror

        <div class="form-group">
            {!! Form::label('category_id','Categoria')!!}
            {!! Form::select('category_id',$categories,null, ['class' => 'form-control'])!!}
        </div>

        @error('category_id')
        <small class="text-danger">{{$message}}</small>
        @enderror

        <div class="form-group">
            <p class="font-weight-bold">Estado</p>
            <label class="mr-2">
                {!! Form::radio('status',1,true)!!}
                Borrador
            </label>
            <label class="mr-2">
                {!! Form::radio('status',2)!!}
                Publicado
            </label>
        </div>

        @error('status')
        <small class="text-danger">{{$message}}</small>
        @enderror

        <div class="form-group">
           
            <p class="font-weight-bold">Etiquetas</p>

            @foreach ($tags as $tag)
            
                <label class="mr-2">
                    {!! Form::checkbox('tags[]',$tag->id,null)!!}
                    {{$tag->name}}
                </label>

            @endforeach
            
        </div>

        @error('tags')
        <small class="text-danger">{{$message}}</small>
        @enderror


        <div class="row mb-3">
            <div class="col">
                <div class="image-wrapper">
                  
                    @isset ($post->image)
                    <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
                    @else
                    <img id="picture" src="https://cdn.pixabay.com/photo/2022/09/17/20/31/ocean-7461792_960_720.jpg" alt="">
                    @endisset
                </div>
               
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('file','Imagen que se mostrara en el post:')!!}
                    {!! Form::file('file', ['class' => 'form-control-file', 'accept' =>'image/*'])!!}
                    @error('file')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam sed facere, molestias quas sint, eius sapiente dicta tenetur nulla iusto rem odio fugit aliquam at nesciunt minima praesentium? Nostrum, harum!</p>
            </div>

            
        </div>

        <div class="form-group">
            {!! Form::label('extract','Extracto:')!!}
            {!! Form::textarea('extract',null, ['class' => 'form-control'])!!}
        </div>
        
        @error('extract')
        <small class="text-danger">{{$message}}</small>
        @enderror

        <div class="form-group">
            {!! Form::label('body','Cuerpo del post:')!!}
            {!! Form::textarea('body',null, ['class' => 'form-control'])!!}
        </div>
        @error('body')
        <small class="text-danger">{{$message}}</small>
        @enderror
       
