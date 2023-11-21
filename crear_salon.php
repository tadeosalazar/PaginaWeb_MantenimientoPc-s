<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "irvnx";

// Obtener datos del formulario
$nombre_salon = $_POST["nombre_salon"];
$id_area = $_POST["id_area"]; // Cambiado el nombre según el formulario

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre_salon = $_POST["nombre_salon"];
$id_area = isset($_POST["id_area"]) ? $_POST["id_area"] : null; // Cambiado aquí

// Verificar si el área existe
if ($id_area !== null) {
    $sqlVerificarAreas = "SELECT id_area FROM area WHERE id_area = $id_area";
    $resultAreas = $conn->query($sqlVerificarAreas);

    if ($resultAreas->num_rows == 0) {
        die("Error: El Área con ID $id_area no existe.");
    }
} else {
    die("Error: El ID del Área no está definido.");
}

// Insertar salón en la base de datos
$sqlInsertarSalon = "INSERT INTO salon (nombre_salon, id_area) VALUES ('$nombre_salon', '$id_area')";

if ($conn->query($sqlInsertarSalon) === TRUE) {
    echo "Salón creado exitosamente";
} else {
    echo "Error al crear el salón: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>