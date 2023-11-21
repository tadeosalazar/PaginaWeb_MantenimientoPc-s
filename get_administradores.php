<?php
// Archivo para obtener la lista de administradores

// Realiza la conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "irvnx");

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Prepara la declaración SQL
$sql = "SELECT id_admin, nombre_admin FROM administrador";

// Ejecuta la declaración
$result = $conn->query($sql);

// Construye las opciones para el select
$options = "";
while ($row = $result->fetch_assoc()) {
    $options .= "<option value='{$row['id_admin']}'>{$row['nombre_admin']}</option>";
}

// Cierra la conexión
$conn->close();

// Devuelve las opciones
echo $options;
?>
