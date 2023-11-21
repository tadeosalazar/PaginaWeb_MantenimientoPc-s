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

// Consulta para obtener detalles
$sqlDetalles = "SELECT detallede.id_dde, dispositivo.nom_disp, especificacion.nombre_esp
                FROM detallede
                INNER JOIN dispositivo ON detallede.id_disp = dispositivo.id_disp
                INNER JOIN especificacion ON detallede.id_esp = especificacion.id_esp";
$result = $conn->query($sqlDetalles);

// Comprobar si hay resultados
if ($result->num_rows > 0) {
    // Inicializar variable para las fichas
    $detalleCards = "";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $detalleCards .= "<div class='col-md-4 mb-4'>";
        $detalleCards .= "<div class='card'>";
        $detalleCards .= "<div class='card-body'>";
        $detalleCards .= "<h5 class='card-title'>ID: " . $row["id_dde"] . "</h5>";
        $detalleCards .= "<p class='card-text'>Dispositivo: " . $row["nom_disp"] . "</p>";
        $detalleCards .= "<p class='card-text'>Especificación: " . $row["nombre_esp"] . "</p>";
        $detalleCards .= "</div>";
        $detalleCards .= "</div>";
        $detalleCards .= "</div>";
    }
} else {
    $detalleCards = "<p>No hay detalles en la base de datos</p>";
}

// Imprimir fichas
echo $detalleCards;

// Cerrar la conexión a la base de datos
$conn->close();
?>
