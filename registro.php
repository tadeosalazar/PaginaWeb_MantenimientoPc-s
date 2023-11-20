<?php
// Registro.php

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
    // Validar y sanear los datos del formulario
    $nombre = htmlspecialchars($_POST["nombre"]);
    $telefono = htmlspecialchars($_POST["telefono"]);
    $correo = htmlspecialchars($_POST["correo"]);

    $sql = "INSERT INTO responsable (nombre_respons, num_tel_respons, correo_respons) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sis", $nombre, $telefono, $correo);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Registro exitoso
        $response = array("status" => "success", "message" => "Registro exitoso. Te has registrado correctamente.");
        echo json_encode($response);
    } else {
        // Error en el registro
        $response = array("status" => "error", "message" => "Error en el registro. Por favor, inténtalo de nuevo.");
        echo json_encode($response);
    }

    $stmt->close();
}

$conn->close();
?>

<!-- Agregamos el script JavaScript al final para redirigir y mostrar el popup -->
<script>
    // Redirigir a index.html después de 3 segundos
    setTimeout(function() {
        window.location.href = "index.html";
    }, 3000);

    // Mostrar el mensaje de registro exitoso después de un breve retraso
    setTimeout(function() {
        alert("Registro exitoso. Te has registrado correctamente.");
    }, 3000); // Mostrar el mensaje después de 3 segundos
</script>
