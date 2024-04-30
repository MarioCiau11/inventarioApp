@extends('layouts.app')

@section('content')



<div class="container">

    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('productos.create') }}" class="btn btn-success mb-2">Crear Producto</a>
        </div>
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    
    </div>
    {{-- @dd($productos); --}}
    <div class="row">     
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción </th>
                            <th>Precio </th>
                            <th>Cantidad </th>
                            <!-- Puedes agregar más columnas según los detalles del usuario que desees mostrar -->
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $producto)
                        <tr>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>{{ $producto->precio }}</td>
                            <td>{{ $producto->cantidad }}</td>
                            <!-- Aquí puedes agregar más columnas según los detalles del producto -->
                            <td>
                                <a href="{{ route('productos.show', ['producto' => $producto->id]) }}" class="btn btn-secondary">
                                    Ver
                                </a>
                                <a href="{{ route('productos.edit', ['producto' => $producto->id]) }}" class="btn btn-primary">
                                    Editar
                                </a>
                                <form action="{{ route('productos.destroy', ['producto' => $producto->id]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?')">Eliminar</button>
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
