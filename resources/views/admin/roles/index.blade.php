@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Roles</h1>
@stop

@section('content')


@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif


<div class="card">
    {{-- @can('admin.roles.create') --}}
    <div class="card-header">
        <a class="btn btn-secondary" href="{{ route('admin.roles.create') }}">Agregar Rol</a>
    </div>
    {{-- @endcan --}}
   
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
                <tbody>
                    @foreach ($roles as $role)
                            <tr>
                                <td>{{$role->id}}</td>
                                <td>{{$role->name}}</td>
                                <td  width="10px">
                                {{-- @can('admin.roles.edit') --}}
                                
                                    <a class="btn btn-primary" href="{{ route('admin.roles.edit', $role ) }}"> Editar</a>
                                
                                {{-- @endcan --}}
                                </td>
                                <td width="10px">
                                {{-- @can('admin.roles.destroy') --}}
                               
                                    <form action="{{ route('admin.roles.destroy', $role) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                   
                                
                                {{-- @endcan --}}
                                </td>
                               

                            </tr>
                           
                            
                           
                    @endforeach
                </tbody>
            </thead>

        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop