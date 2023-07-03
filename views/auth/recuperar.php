<h1 class="nombre-pagina">Recuperar contraseña</h1>
<p class="descripcion-pagina">Coloca tu nueva contraseña a continuación</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<?php if($error) return; ?>
<form class="formulario" method="POST">
    <div class="campo">
        <label for="password">Contraseña</label>
        <input
            type="password"
            id="password"
            name="password"
            placeholder="Ingresa tu nueva contraseña (mínimo 6 caracteres)"
        />
    </div>
    <input type="submit" class="boton" value="Guardar nueva contaseña">

</form>

<div class="acciones">
    <a href="/">Inicia Sesión</a>
    <a href="/crear-cuenta">Crear nueva cuenta</a>
</div>