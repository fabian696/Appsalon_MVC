<h1 class="nombre-pagina">Crear cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente el formulario para crear una cuenta</p>

    <?php 
        include_once __DIR__ . "/../templates/alertas.php";
    ?>

<form class="formulario" method="POST" action="/crear-cuenta">
  
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input
            type="text"
            id="nombre"
            name="nombre"
            placeholder="Ingresa tu nombre"
            value="<?php echo s($usuario->nombre); ?>"
        />
    </div>

    <div class="campo">
        <label for="apellido">Apellido</label>
        <input
            type="text"
            id="apellido"
            name="apellido"
            placeholder="Ingresa tu apellido"
            value="<?php echo s($usuario->apellido); ?>"
        />
    </div>

    <div class="campo">
        <label for="telefono">Teléfono</label>
        <input
            type="tel"
            id="telefono"
            name="telefono"
            placeholder="Ingresa tu telefono"
            value="<?php echo s($usuario->telefono); ?>"
        />
    </div>

    <div class="campo">
        <label for="email">Correo</label>
        <input
            type="email"
            id="email"
            name="email"
            placeholder="Ingresa tu correo"
            value="<?php echo s($usuario->email); ?>"
        />
    </div>

    <div class="campo">
        <label for="password">Contraseña</label>
        <input
            type="password"
            id="password"
            name="password"
            placeholder="Ingresa tu contraseña (mínimo 6 caracteres)"
        />
    </div>

    <input type="submit" value="Crear Cuenta" class="boton">


</form>

<div class="acciones">
    <a href="/">Inicia Sesión</a>
    <a href="/olvide">¿Olvidaste tu contraseña?</a>
</div>