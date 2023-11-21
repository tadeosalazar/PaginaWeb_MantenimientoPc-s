$(document).ready(function() {
    // Llama a la función para cargar las órdenes
    cargarOrdenes();
});

// Función para cargar las órdenes
function cargarOrdenes() {
    // Realiza una solicitud AJAX para obtener los datos de las órdenes
    $.ajax({
        url: "get_ordenes.php", // Debes crear este archivo para manejar la obtención de órdenes desde la base de datos
        method: "GET",
        dataType: "json",
        success: function(data) {
            // Llena el contenedor con las fichas de órdenes
            mostrarOrdenes(data);
        },
        error: function(error) {
            console.error(error);
        }
    });
}

// Función para mostrar las órdenes en fichas
function mostrarOrdenes(ordenes) {
    // Obtiene el contenedor de órdenes
    var contenedor = $("#ordenesContainer");

    // Limpia el contenedor
    contenedor.empty();

    // Recorre las órdenes y crea fichas para cada una
    for (var i = 0; i < ordenes.length; i++) {
        var orden = ordenes[i];

        // Crea una ficha para la orden
        var ficha = $("<div class='col-md-4 ficha'></div>");
        ficha.append("<h4>" + orden.folio_ord + "</h4>");
        ficha.append("<p><strong>Estatus:</strong> " + orden.estatus_ord + "</p>");
        ficha.append("<p><strong>Fecha de Recepción:</strong> " + orden.fecha_recep_ord + "</p>");
        ficha.append("<p><strong>Tipo de Mantenimiento:</strong> " + orden.tipo_mant_ord + "</p>");
       

        // Agrega la ficha al contenedor
        contenedor.append(ficha);
    }
}

