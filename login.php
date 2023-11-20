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
    $sqlAdministrador = "SELECT id_admin, nombre_admin, hash_admin, correo_admin, num_tel_admin FROM administrador WHERE correo_admin = ?";
    $stmtAdministrador = $conn->prepare($sqlAdministrador);
    $stmtAdministrador->bind_param("s", $correo);
    $stmtAdministrador->execute();
    $stmtAdministrador->store_result();

    // Verificar si el usuario es un responsable
    if ($stmtAdministrador->num_rows > 0) {
        $stmtAdministrador->bind_result($id_admin, $nombre_admin, $hash_admin, $correo_admin, $num_tel_admin);
        $stmtAdministrador->fetch();

        $_SESSION['rol'] = "administrador";
        $_SESSION['id_admin'] = $id_admin;
        $_SESSION['nombre_admin'] = $nombre_admin;
        $_SESSION['correo'] = $correo_admin;
        $_SESSION['telefono_admin'] = $num_tel_admin;
        
        header("Location: administrador_inicio.php"); // Cambiar la URL de redirección según tu estructura de archivos
        exit();
    } else {
        // Si no es un responsable, mostrar un mensaje de error o redirigir a una página predeterminada.
        echo "No se encontró un responsable con el correo proporcionado.";
    }

    $stmtAdministrador->close();
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
