@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar producto</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('productos.update', ['producto' => $producto->id]) }}">
                        @csrf
                        @method('PUT')

                        
                        @include('page.productos.form')

                        <button type="submit" class="btn btn-primary mt-2">Editar producto</button>
                        <a href="{{ route('productos.index') }}" class="btn btn-danger mt-2">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
