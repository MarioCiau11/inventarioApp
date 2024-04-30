@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalles del Producto</div>

                <div class="card-body">
                    <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
                    <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
                    <p><strong>Cantidad:</strong> {{ $producto->cantidad }}</p>
                    <p><strong>Precio:</strong> {{ $producto->precio }}</p>
                    <p><strong>Usuario:</strong> {{ $producto->user->name }}</p>

                    
                    <!-- Agrega más detalles del usuario según sea necesario -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
