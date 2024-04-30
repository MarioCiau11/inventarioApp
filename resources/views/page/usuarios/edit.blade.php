@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Usuario</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('usuarios.update', ['usuario' => $usuario->id]) }}">
                        @csrf
                        @method('PUT')

                        
                        @include('page.usuarios.form')

                        <button type="submit" class="btn btn-primary mt-2">Editar Usuario</button>
                        <a href="{{ route('usuarios.index') }}" class="btn btn-danger mt-2">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
