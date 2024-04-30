@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear producto</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('productos.store') }}">
                        @csrf

                        @include('page.productos.form')

                        <button type="submit" class="btn btn-primary mt-2">Crear producto</button>
                        <a href="{{ route('productos.index') }}" class="btn btn-danger mt-2">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
