<?php
$servername = "localhost"; // Servidor (para local es "localhost")
$username = "gunawaliggagwa"; // Usuario por defecto en XAMPP
$password = "Josdri02041994"; // Contraseña vacía en XAMPP
$database = "formulario_db"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>

