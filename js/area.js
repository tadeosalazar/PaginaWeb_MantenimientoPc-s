console.log("jQuery version: " + $.fn.jquery);

// Función para cargar dinámicamente los responsables en el select
function cargarResponsables() {
    $.ajax({
        url: "get_responsables.php", // Cambia la URL según tu estructura de archivos
        method: "GET",
        success: function(data) {
            $("#id_respons").html(data);
        }
    });
}

// Función para crear un área
function crearArea() {
    var nombre_area = $("#nombre_area").val();
    var id_respons = $("#id_respons option:selected").val();

    $.ajax({
        url: "crear_area.php", // Cambia la URL según tu estructura de archivos
        method: "POST",
        data: { nombreArea: nombre_area, idResponsable: id_respons },
        success: function(response) {
            alert(response); // Puedes manejar la respuesta según tus necesidades
            // Limpiar el formulario después de la creación exitosa
            $("#nombre_area").val("");
            cargarResponsables(); // Actualizar la lista de responsables
        }
    });
}


// Cargar responsables al cargar la página
$(document).ready(function() {
    cargarResponsables();
       // Cargar áreas al cargar la página
       cargarAreas();
});


function cargarAreas() {
    $.ajax({
        url: "get_areas.php", // Ajusta la URL según tu estructura de archivos
        method: "GET",
        success: function(data) {
            $("#areasTableBody").html(data);
        }
    });
}

//EMPECEMOS A CREAR SALONES


