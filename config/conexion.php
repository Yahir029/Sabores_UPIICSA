<?php
// Datos de conexión a la base de datos
$servername = "127.0.0.1:3402";
$username = "root";
$password = "";
$database = "sabores_upiicsa";  // Nombre de la base de datos

// Establecer la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
