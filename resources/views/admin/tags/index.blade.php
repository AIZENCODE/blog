@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Mostrar listado de Etiquetas</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-danger">
    <strong>{{session('info')}}</strong>
</div>
@endif

    <div class="card">
        @can('admin.tags.create')
        <div class="card-header">
            <a class="btn btn-secondary" href="{{ route('admin.tags.create') }}">Agregar Etiqueta</a>
        </div>
        @endcan
       
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                    <tbody>
                        @foreach ($tags as $tag)
                                <tr>
                                    <td>{{$tag->id}}</td>
                                    <td>{{$tag->name}}</td>
                                    <td  width="10px">
                                    @can('admin.tags.edit')
                                    
                                        <a class="btn btn-primary" href="{{ route('admin.tags.edit', $tag ) }}"> Editar</a>
                                    
                                    @endcan
                                    </td>
                                    <td width="10px">
                                    @can('admin.tags.destroy')
                                   
                                        <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                       
                                    
                                    @endcan
                                    </td>
                                   

                                </tr>
                               
                                
                               
                        @endforeach
                    </tbody>
                </thead>

            </table>
        </div>
    </div>
@stop
