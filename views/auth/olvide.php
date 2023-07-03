<h1 class="nombre-pagina">Olvide contraseña</h1>
<p class="descripcion-pagina">Reestablece tu contraseña escribiendo tu correo a continuación</p>

    <?php 
        include_once __DIR__ . "/../templates/alertas.php";
    ?>

<form class="formulario" action="/olvide" method="POST">
    <div class="campo">
        <label for="email">Correo</label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Ingresa tu correo"
        />
    </div>

    <input type="submit" class="boton" value="Enviar Instrucciones">
</form>

<div class="acciones">
    <a href="/">Inicia Sesión</a>
    <a href="/crear-cuenta">Crear nueva cuenta</a>
</div>