<?php
include "funciones.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $resultado = guardarMensaje($nombre, $email, $mensaje);

    if ($resultado === true) {
        echo '<div class="alert alert-success text-center">✅ Mensaje enviado con éxito.</div>';
    } else {
        echo '<div class="alert alert-danger text-center">❌ Error: ' . $resultado . '</div>';
    }
}
?>