<div class="form-group">
    <label for="name">Nombre</label>
    <input id="name" type="text" class="form-control" name="name" value="{{ $usuario->name }}" required autofocus>
</div>

<div class="form-group">
    <label for="email">Correo Electrónico</label>
    <input id="email" type="email" class="form-control" name="email" value="{{ $usuario->email }}" required>
</div>

<div class="form-group">
    <label for="password">Contraseña</label>
    <input id="password" type="password" class="form-control" name="password" required>
</div>

<div class="form-group">
    <label for="password-confirm">Confirmar Contraseña</label>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
</div>
