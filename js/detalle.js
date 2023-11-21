// detalle.js
console.log("jQuery version: " + $.fn.jquery);

// Función para cargar dispositivos y especificaciones al cargar la página
$(document).ready(function() {
    cargarDispositivos();
    cargarEspecificaciones();
});

// Función para cargar dispositivos dinámicamente
function cargarDispositivos() {
    $.ajax({
        url: "get_dispositivos.php",
        method: "GET",
        success: function(data) {
            $("#id_disp").html(data);
        }
    });
}

// Función para cargar especificaciones dinámicamente
function cargarEspecificaciones() {
    $.ajax({
        url: "get_especificaciones.php",
        method: "GET",
        success: function(data) {
            $("#id_esp").html(data);
        }
    });
}

// Función para crear un detalle
function crearDetalle() {
    var id_disp = $("#id_disp option:selected").val();
    var id_esp = $("#id_esp option:selected").val();

    $.ajax({
        url: "crear_detalle.php",
        method: "POST",
        data: { id_disp: id_disp, id_esp: id_esp },
        success: function(response) {
            alert(response);
            cargarDetalles(); // Agrega lógica para cargar detalles desde la base de datos y mostrarlos en la página
        }
    });
}
