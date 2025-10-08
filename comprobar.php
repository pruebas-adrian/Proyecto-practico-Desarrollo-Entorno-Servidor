<?php

include 'usuario.php';
include 'cookie.php';

$_SESSION["userrange"] = "";


if (isset($_GET["Usuario"])) {
    if ($Usuario == $_GET["Usuario"] && $Contrasena == $_GET["Contrasena"]) {
        $_SESSION["userrange"] = "Admin";
        header("location: index.php ");
    }
} else {
    header("location: formulario.php");
}
