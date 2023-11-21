<?php
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

// Consulta para obtener dispositivos
$sqlDispositivos = "SELECT id_disp, nom_disp FROM dispositivo";
$result = $conn->query($sqlDispositivos);

// Comprobar si hay resultados
if ($result->num_rows > 0) {
    // Inicializar variable para las opciones del select
    $options = "";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $options .= "<option value='" . $row["id_disp"] . "'>" . $row["nom_disp"] . "</option>";
    }
} else {
    $options = "<option value=''>No hay dispositivos en la base de datos</option>";
}

// Imprimir opciones del select
echo $options;

// Cerrar la conexión a la base de datos
$conn->close();
?>
