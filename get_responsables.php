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

// Consulta para obtener responsables
$sqlResponsable = "SELECT id_respons, nombre_respons, correo_respons, num_tel_respons FROM responsable";
$result = $conn->query($sqlResponsable);

// Comprobar si hay resultados
if ($result->num_rows > 0) {
    // Inicializar variables para las opciones del select y las filas de la tabla
    $options = "";
    $tableRows = "";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        // Construir las filas de la tabla
        $tableRows .= "<tr>";
        $tableRows .= "<td>" . $row["id_respons"] . "</td>";
        $tableRows .= "<td>" . $row["nombre_respons"] . "</td>";
        $tableRows .= "<td>" . $row["correo_respons"] . "</td>";
        $tableRows .= "<td>" . $row["num_tel_respons"] . "</td>";
        $tableRows .= "</tr>";

        // Construir las opciones del select
        $options .= "<option value='{$row["id_respons"]}'>{$row["nombre_respons"]}</option>";
    }
} else {
    // Si no hay responsables, agregar una fila de la tabla con un mensaje
    $tableRows = "<tr><td colspan='4'>No hay responsables en la base de datos</td></tr>";
}

// Imprimir las opciones del select y las filas de la tabla
echo $options;
echo $tableRows;

// Cerrar la conexión a la base de datos
$conn->close();
?>
