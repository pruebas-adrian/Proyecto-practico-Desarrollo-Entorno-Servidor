<?php

include 'cookie.php';

echo "Usuario preestablecido: Pepe<br>";
echo "Contraseña preestablecida: 1234<br>";

?>

<form action="comprobar.php" method="GET">
    <label for="Usuario">Usuario</label>
    <input type="text" id="Usuario" name="Usuario" required autocomplete="off">
    <br>
    <label for="Contrasena">Contraseña</label>
    <input type="password" id="Contrasena" name="Contrasena" required maxlength="8">
    <br>
    <button type="submit">Enviar</button>
</form>