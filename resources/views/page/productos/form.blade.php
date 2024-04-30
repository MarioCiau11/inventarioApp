<div class="form-group">
    <label for="nombre">Nombre</label>
    <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $producto->nombre }}" required autofocus>
</div>

<div class="form-group">
    <label for="descripcion">Descripción</label>
    <textarea id="descripcion" class="form-control" name="descripcion" rows="4" required>{{ $producto->descripcion }}</textarea>
</div>


<div class="form-group">
    <label for="cantidad">Cantidad</label>
    <input id="cantidad" type="number" class="form-control" name="cantidad" value="{{ $producto->cantidad }}" required>
</div>


<div class="form-group">
    <label for="precio">Precio</label>
    <input id="precio" type="number" class="form-control" name="precio" value="{{ $producto->precio }}" required>
</div>


<div class="form-group">
    <label for="usuario_id">Usuario</label>
    <select id="usuario_id" class="form-control" name="usuario_id" required>
        <option value="">Seleccione un usuario</option>
        @foreach($usuarios as $usuario)
            <option value="{{ $usuario->id }}" {{ $producto->usuario_id == $usuario->id ? 'selected' : '' }}>{{ $usuario->name }}</option>
        @endforeach
    </select>
</div>
