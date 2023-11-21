<?php
// Incluir el archivo de conexión
include "..\config\conexion.php";

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $correo = isset($_POST["correo"]) ? $_POST["correo"] : "";
    $telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : "";
    $fecha = isset($_POST["fecha"]) ? date("Y-m-d", strtotime($_POST["fecha"])) : "";
    $hora = isset($_POST["hora"]) ? $_POST["hora"] : "";
    $producto = isset($_POST["producto"]) ? $_POST["producto"] : "";

    // Consulta SQL para insertar datos en la tabla
    $sql = "INSERT INTO ordenar_clie (nombre, correo, telefono, fecha, hora, producto) 
            VALUES ('$nombre', '$correo', '$telefono', '$fecha', '$hora', '$producto')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>

