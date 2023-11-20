<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "irvnx";

// Obtener datos del formulario
$nombreArea = $_POST["nombreArea"];
$idResponsable = $_POST["idResponsable"]; // Cambiado el nombre según el formulario

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si el responsable existe
$sqlVerificarResponsable = "SELECT id_respons FROM responsable WHERE id_respons = $idResponsable";
$resultResponsable = $conn->query($sqlVerificarResponsable);

if ($resultResponsable->num_rows == 0) {
    die("Error: El responsable con ID $idResponsable no existe.");
}

// Insertar área en la base de datos
$sqlInsertarArea = "INSERT INTO area (nombre_area, id_respons) VALUES ('$nombreArea', '$idResponsable')";

if ($conn->query($sqlInsertarArea) === TRUE) {
    echo "Área creada exitosamente";
} else {
    echo "Error al crear el área: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
