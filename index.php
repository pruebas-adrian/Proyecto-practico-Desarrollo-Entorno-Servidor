<?php

include 'cookie.php';

if ($_SESSION["userrange"] == "" || !isset($_SESSION["userrange"]) || $_SESSION["userrange"] != "Admin") {
    header("location: formulario.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página</title>
</head>
<body>
    <button onclick="<?php $_SESSION["userrange"] = [];?>">Cerrar Sesión</button>
</body>
</html>
