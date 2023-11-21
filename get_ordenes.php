<?php
// Obtener datos de la base de datos y devolverlos en formato JSON

// Realiza la conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "irvnx");

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Prepara la declaración SQL
$sql = "SELECT * FROM orden";

// Ejecuta la declaración
$result = $conn->query($sql);

// Verifica si se obtuvieron resultados
if ($result->num_rows > 0) {
    // Inicializa un array para almacenar los datos de las órdenes
    $ordenes = array();

    // Recorre los resultados y agrega cada orden al array
    while ($row = $result->fetch_assoc()) {
        $ordenes[] = $row;
    }

    // Convierte el array a formato JSON y lo imprime
    echo json_encode($ordenes);
} else {
    // Si no hay resultados, imprime un mensaje
    echo "No se encontraron órdenes.";
}

// Cierra la conexión
$conn->close();
?>
