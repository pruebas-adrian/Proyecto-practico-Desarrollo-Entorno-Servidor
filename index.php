<?php
include 'cookie.php';
include 'include.php';

if ($_SESSION["userrange"] == "" || !isset($_SESSION["userrange"]) || $_SESSION["userrange"] != "Admin") {
    header("location: formulario.php");
}

function cerrarSesion()
{
    return $_SESSION["userrange"] = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<form action="<?php cerrarSesion(); ?>">
    <button>Cerrar sesión</button>
</form>
</body>
</html>
