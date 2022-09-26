@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de categoria</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-danger">
    <strong>{{session('info')}}</strong>
</div>
@endif

    <div class="card">
        <div class="card-header">
            @can('admin.categories.create')
            <a class="btn btn-secondary" href="{{ route('admin.categories.create') }}">Agregar Categoria</a>
        
            @endcan
           
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                    <tbody>
                        @foreach ($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td  width="10px">
                                        @can('admin.categories.edit')
                                        <a class="btn btn-primary" href="{{ route('admin.categories.edit', $category ) }}"> Editar</a>

                                        @endcan
                                    </td>
                                    <td width="10px">
                                        @can('admin.categories.destroy')  
                                        <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
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

