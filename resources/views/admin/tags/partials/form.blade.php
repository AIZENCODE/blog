<div class="form-group">
    {!!form::label('name','Nombre' )!!}
    {!!form::text('name',null,['class' =>'form-control', 'placeholder' =>'Ingrese el nombre de la Etiqueta'] )!!}

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!!form::label('slug','Slug' )!!}
    {!!form::text('slug',null,['class' =>'form-control', 'placeholder' =>'Ingrese el slug de la Etiqueta', 'readonly'] )!!}
   
    @error('slug')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    {!!form::label('color','Color' )!!}
    {!!form::select('color',$colors,null,['class' =>'form-control'] )!!}
   
    @error('color')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
