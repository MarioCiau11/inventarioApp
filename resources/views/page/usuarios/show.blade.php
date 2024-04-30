@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalles del Usuario</div>

                <div class="card-body">
                    <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
                    <p><strong>Correo Electrónico:</strong> {{ $usuario->email }}</p>
                    <p><strong>Productos:</strong></p>
                    @if($usuario->products->isNotEmpty())
                        <div class="row">
                            @foreach($usuario->products as $product)
                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                        <!-- Agrega aquí el código HTML para el banner del producto -->
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $product->nombre }}</h5>
                                            <p class="card-text">{{ $product->descripcion }}</p>
                                            <p class="card-text">Precio: ${{ $product->precio }}</p>
                                            <!-- Agrega aquí cualquier otro detalle del producto que desees mostrar -->
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>No hay productos asociados a este usuario.</p>
                    @endif
                    
                    <!-- Agrega más detalles del usuario según sea necesario -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
