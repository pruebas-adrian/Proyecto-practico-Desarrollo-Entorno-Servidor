<?php

include 'cookie.php';

?>

<form action="comprobar.php" method="GET">
    <label for="Usuario">Usuario</label>
    <input type="text" id="Usuario" name="Usuario" required>
    <br>
    <label for="Contrasena">Contraseña</label>
    <input type="password" id="Contrasena" name="Contrasena" required>
    <br>
    <button type="submit">Enviar</button>
</form>