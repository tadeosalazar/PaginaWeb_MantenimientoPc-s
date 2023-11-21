<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M3E523</title>

    <!--CSS BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">

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
            <a class="nav-link active" aria-current="page" href="administrador_inicio.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ordenes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="creardetalle.html">Crear detalle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="areas_list.html">Areas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="salones_list.html">Salones</a>
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

  <!--Carrusel-->
  <section class="main-section">
  <div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Objetivo</h1>
            <p>Controlar los procesos de calidad para tener un mejor inventario de los equipos de la
            FIME haciendo uso del sistema M3E523.
            <br>
            Buscamos generarár un sistema de software que centralizará la gestión de
            dispositivos electrónicos en los laboratorios de la Facultad de Ingeniería Mecánica y Eléctrica
            (FIME), la cual, consiste en implementar un sistema integral de seguimiento y control que
            abordará las limitaciones existentes al: Mantener un inventario centralizado de dispositivos
            electrónicos, la automatización de procesos, la generación de informes de estado y la
            programación de mantenimiento preventivo .El sistema reducirá la carga de trabajo manual y
            disminuirá la posibilidad de errores, además de simplificar la gestión de los activos de
            laboratorio y mejorará la eficiencia en el uso de los recursos. Actualmente se encuentra como
            un prototipo de características seleccionadas.</p>
        </div>
        <div class="col-md-6">
            <img src="img/compusfime.jpg" alt="Equipos de computo en FIME" class="img-fluid">
        </div>
    </div>
</div>
</section>

<section class="next-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/FIMEv1-1.jpg" alt="FIME" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h1>Investigación</h1>
                <p>La Secretaría de Desarrollo Institucional de la Facultad de Ingeniería Mecánica y Eléctrica tiene
                    el principal propósito es el de fomentar la cultura de calidad por medio de un mejoramiento
                    continuo, al mismo tiempo buscando una excelencia que cumpla con las demandas y
                    expectativas de la sociedad (UANL, 2022).
                    <br>
                    <br>
                    La Secretaría de Desarrollo Institucional es líder en el desarrollo de proyectos que
                    asegura el diseño, implementación, mantenimiento y mejora de las efectivas recomendaciones
                    que se atienden pare el logro del cumplimiento de los diferentes criterios de instancias que
                    evalúan, auditan, acreditan y certifican la calidad de los Programas Educativos (PE) de
                    Instituciones de Educación Superior (IES) como lo son: los Comités Interinstitucionales para la
                    Evaluación de la Educación Superior (CIEES), el Consejo de Acreditación de la Enseñanza de
                    la Ingeniería (CACEI), Accreditation Board for Engineering and Technology (ABET), el sello
                    europeo de calidad internacional en ingeniería EUR-ACE, el Programa para el Desarrollo
                    Profesional Docente (PRODEP), el Padrón Nacional de Posgrados de Calidad (PNPC), el
                    Sistema Nacional de Investigadores (SNI), la Asociación Universitaria Iberoamericana de
                    Postgrado (AUIP), la Norma Internacional ISO 9001:2015 y la Norma Internacional ISO
                    21001:2018 (UANL, 2022).
                    <br>
                    En gran medida, lo anterior es posible al implementar una Estrategia de Gestión
                    Académico-Administrativa reflejada en el Modelo Estratégico del Sistema Integral para la
                    Calidad Educativa (ME-SINCE), que a través del Sistema de Gestión Integral (SGI) constituye
                    procesos estandarizados y sistematizados que favorecen al logro del reconocimiento mundial
                    de la FIME, en su VISIÓN 2030, mediante la formación integral universitaria de nuestros
                    estudiantes, que son la esencia de nuestro quehacer y nuestra misión (UANL, 2022).

                </p>
            </div>
        </div>
    </div>
</section>

    <!--SCRIPT BOOTSTRAP-->
    <script src="js/scriptrespinicio.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
