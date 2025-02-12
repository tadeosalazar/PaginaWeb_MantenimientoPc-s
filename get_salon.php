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

// Consulta para obtener salon
$sqlSalon = "SELECT id_salon, nombre_salon, id_area FROM salon";
$result = $conn->query($sqlSalon);

// Comprobar si hay resultados
if ($result->num_rows > 0) {
    // Inicializar variable para las filas de la tabla
    $tableRows = "";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $tableRows .= "<tr>";
        $tableRows .= "<td>" . $row["id_salon"] . "</td>";
        $tableRows .= "<td>" . $row["nombre_salon"] . "</td>";
        $tableRows .= "<td>" . $row["id_area"] . "</td>";
        $tableRows .= "</tr>";
    }
} else {
    $tableRows = "<tr><td colspan='3'>No hay áreas en la base de datos</td></tr>";
}

// Imprimir solo las filas de la tabla
echo $tableRows;

// Cerrar la conexión a la base de datos
$conn->close();
?>
