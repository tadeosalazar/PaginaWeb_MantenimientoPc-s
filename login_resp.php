<?php
// login_responsable.php

session_start();

// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "irvnx";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $conn->real_escape_string($_POST['correo']);

    // Consulta preparada para obtener datos de responsable
    $sqlResponsable = "SELECT id_respons, nombre_respons, correo_respons, num_tel_respons FROM responsable WHERE correo_respons = ?";
    $stmtResponsable = $conn->prepare($sqlResponsable);
    $stmtResponsable->bind_param("s", $correo);
    $stmtResponsable->execute();
    $stmtResponsable->store_result();

    // Verificar si el usuario es un responsable
    if ($stmtResponsable->num_rows > 0) {
        $stmtResponsable->bind_result($id_respons, $nombre_respons, $correo_respons, $num_tel_respons);
        $stmtResponsable->fetch();

        $_SESSION['rol'] = "responsable";
        $_SESSION['id_respons'] = $id_respons;
        $_SESSION['nombre'] = $nombre_respons;
        $_SESSION['correo'] = $correo_respons;
        $_SESSION['telefono'] = $num_tel_respons;
        
        header("Location: responsable_inicio.php"); // Cambiar la URL de redirección según tu estructura de archivos
        exit();
    } else {
        // Si no es un responsable, mostrar un mensaje de error o redirigir a una página predeterminada.
        echo "No se encontró un responsable con el correo proporcionado.";
    }

    $stmtResponsable->close();
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
