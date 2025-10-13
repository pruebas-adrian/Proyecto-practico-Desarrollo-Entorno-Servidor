<?php

include 'cookie.php';
include 'usuario.php';

echo "Usuario preestablecido: $Usuario<br>";
echo "Contraseña preestablecida: $Contrasena<br>";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>

<body>
        <form action="comprobar.php" method="GET" class="formulario">
            <label for="Usuario">Usuario</label>
            <input type="text" id="Usuario" name="Usuario" required autocomplete="off" placeholder="Usuario">
            <br>
            <label for="Contrasena">Contraseña</label>
            <input type="password" id="Contrasena" name="Contrasena" required maxlength="8" autocomplete="off" placeholder="Contraseña">
            <br>
            <button type="submit">Enviar</button>
        </form>
</body>

</html>