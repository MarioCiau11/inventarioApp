@extends('layouts.app')

@section('content')



<div class="container">

    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('usuarios.create') }}" class="btn btn-success mb-2">Crear Usuario</a>
        </div>
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    
    </div>
    {{-- @dd($usuarios); --}}
    <div class="row">     
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo Electrónico</th>
                            <!-- Puedes agregar más columnas según los detalles del usuario que desees mostrar -->
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                            <!-- Aquí puedes agregar más columnas según los detalles del usuario -->
                            <td>
                                <a href="{{ route('usuarios.show', ['usuario' => $usuario->id]) }}" class="btn btn-secondary">
                                    Ver
                                </a>
                                <a href="{{ route('usuarios.edit', ['usuario' => $usuario->id]) }}" class="btn btn-primary">
                                    Editar
                                </a>
                                <form action="{{ route('usuarios.destroy', ['usuario' => $usuario->id]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">Eliminar</button>
                                </form>
                                <!-- Agrega más botones de acción según sea necesario -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
