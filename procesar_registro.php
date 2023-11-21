<?php
// Archivo para procesar el formulario de registro de orden

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Realiza la conexión a la base de datos
    $conn = new mysqli("localhost", "root", "", "irvnx");

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Obtiene los valores del formulario
    $folio_ord = $_POST["folio_ord"];
    $estatus_ord = $_POST["estatus_ord"];
    $fecha_recep_ord = $_POST["fecha_recep_ord"];
    $hora_ord = $_POST["hora_ord"];
    $tipo_mant_ord = $_POST["tipo_mant_ord"];
    $detiene_op_ord = isset($_POST["detiene_op_ord"]) ? 1 : 0;
    $puede_op_ord = isset($_POST["puede_op_ord"]) ? 1 : 0;
    $material_ord = $_POST["material_ord"];
    $trabajo_ord = $_POST["trabajo_ord"];
    $tiempo_aprox_ord = $_POST["tiempo_aprox_ord"];
    $descrip_ord = $_POST["descrip_ord"];
    $fecha_trabajo_ord = $_POST["fecha_trabajo_ord"];
    $diagnostico_ord = $_POST["diagnostico_ord"];
    $id_disp = $_POST["id_disp"];
    $id_admin = $_POST["id_admin"];

    // Prepara la declaración SQL
    $sql = "INSERT INTO orden (folio_ord, estatus_ord, fecha_recep_ord, hora_ord, tipo_mant_ord, 
            detiene_op_ord, puede_op_ord, material_ord, trabajo_ord, tiempo_aprox_ord, descrip_ord, 
            fecha_trabajo_ord, diagnostico_ord, id_disp, id_admin) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepara la declaración
    $stmt = $conn->prepare($sql);

    // Vincula los parámetros
    $stmt->bind_param("issssiissssssii", $folio_ord, $estatus_ord, $fecha_recep_ord, $hora_ord, $tipo_mant_ord,
    $detiene_op_ord, $puede_op_ord, $material_ord, $trabajo_ord, $tiempo_aprox_ord, $descrip_ord,
    $fecha_trabajo_ord, $diagnostico_ord, $id_disp, $id_admin);


    // Ejecuta la declaración
    $stmt->execute();

    // Cierra la conexión
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M3E523</title>

    <!--CSS BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="css/orden.css">

</head>
<body>
<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="img/OsoLogoVerde.png" alt="" width="40" height="34" class="d-inline-block align-text-top">
        M3E523
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="responsable_inicio.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="crearorden.html">Crear Orden</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="detalle_list.html">Detalles de Dispositivos</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="index.html" onclick="cerrarSesion()">Cerrar Sesión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!--mensaje-->

<!--mensaje-->
<div class="container mt-5">
    <div class="text-center">
        <img class="imagen" src="img/emote.png" alt="Descripción de la imagen">
        <p class="texto">Tu orden se registró con éxito.</p>
        <button class="boton btn btn-primary" onclick="window.location.href='responsable_inicio.php'">Ir a Inicio</button>
    </div>
</div>



<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- JavaScript personalizado para cargar y mostrar detalles -->
<script src="js/registar_orden.js"></script>




</body>
</html>
