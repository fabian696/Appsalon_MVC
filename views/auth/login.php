<h1 class="nombre-pagina">Entra a tu cuenta</h1>
<p class="descripcion-pagina">Inicia sesión con tus datos</p>

    <?php 
        include_once __DIR__ . "/../templates/alertas.php";
    ?>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Correo</label>
        <input
            type="email"
            id="email"
            placeholder="Ingresa tu correo"
            name="email"
            value="<?php echo s($auth->email); ?>"
        />
    </div>

    <div class="campo">
        <label for="password">Contraseña</label>
        <input 
            type="password"
            id="password"
            placeholder="Ingresa tu contraseña (mínimo 6 caracteres)"
            name="password"
        />
    </div>

    <input type="submit" class="boton" value="Iniciar Sesión">
</form>

<div class="acciones">
    <a href="/crear-cuenta">Crear cuenta nueva</a>
    <a href="/olvide">¿Olvidaste tu contraseña?</a>
</div>