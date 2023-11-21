// salon.js
console.log("jQuery version: " + $.fn.jquery);

// Cargar áreas al cargar la página y después de crear un salón
$(document).ready(function() {
    cargarAreas();
    cargarSalon();
});

// Función para cargar dinámicamente los responsables en el select
function cargarAreas() {
    $.ajax({
        url: "get_areas.php",
        method: "GET",
        success: function(data) {
            $("#id_area").html(data);
        }
    });
}

// Función para crear un salón
function crearSalon() {
    var nombre_salon = $("#nombre_salon").val();
    var id_area = $("#id_area").val();

    $.ajax({
        url: "crear_salon.php",
        method: "POST",
        data: { nombre_salon: nombre_salon, id_area: id_area },
        success: function(response) {
            alert(response);
            $("#nombre_salon").val("");
            cargarAreas(); // Actualizar la lista de áreas
            cargarSalon(); // Actualizar la lista de salones
        }
    });
}


// Cargar áreas y salones al cargar la página
$(document).ready(function() {
    cargarAreas();
    cargarSalon();
});

// Función para cargar dinámicamente los salones en la tabla
function cargarSalon() {
    $.ajax({
        url: "get_salon.php",
        method: "GET",
        success: function(data) {
            $("#salonesTableBody").html(data);
        }
    });
}
