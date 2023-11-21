<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "irvnx";

// Obtener datos del formulario
$id_disp = $_POST["id_disp"];
$id_esp = $_POST["id_esp"];

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Insertar detalle en la base de datos
$sqlInsertarDetalle = "INSERT INTO detallede (id_disp, id_esp) VALUES ('$id_disp', '$id_esp')";

if ($conn->query($sqlInsertarDetalle) === TRUE) {
    echo "Detalle creado exitosamente";
} else {
    echo "Error al crear el detalle: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
