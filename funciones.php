<?php
include "conexionbase.php";

function guardarMensaje($nombre, $email, $mensaje) {
    global $conn;

    $nombre = $conn->real_escape_string($nombre);
    $email = $conn->real_escape_string($email);
    $mensaje = $conn->real_escape_string($mensaje);

    $sql = "INSERT INTO mensajes (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";
    
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return "Error: " . $conn->error;
    }
}
?>
