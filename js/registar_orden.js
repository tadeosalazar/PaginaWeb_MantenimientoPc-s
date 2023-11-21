$(function() {
    // Llama a la función para cargar administradores
    cargarAdministradores();

    // Configuración del evento submit para el formulario
    $("#registroOrdenForm").submit(function(event) {
        event.preventDefault(); // Evita que el formulario se envíe de la manera tradicional

        // Obtén los datos del formulario
        var formData = $(this).serialize();

        console.log("Formulario enviado:", formData); // Verifica si se están capturando los datos correctamente

        // Envía los datos al servidor usando AJAX
        $.ajax({
            url: "procesar_registro.php",
            method: "POST",
            data: formData,
            success: function(response) {
                console.log(response); // Puedes manejar la respuesta del servidor aquí

                // Muestra el mensaje y redirige al index después de la interacción del usuario
                mostrarMensajeYRedirigir(response);
            },
            error: function(error) {
                console.error(error); // Manejar errores si es necesario
            }
        });
    });
});

// Función para cargar la lista de administradores en el formulario
function cargarAdministradores() {
    $.ajax({
        url: "get_administradores.php",
        method: "GET",
        success: function(data) {
            // Llena el elemento select con la lista de administradores
            $("#id_admin").html(data);
        },
        error: function(error) {
            console.error(error);
        }
    });
}

// Función para mostrar el mensaje y redirigir después de la interacción del usuario
function mostrarMensajeYRedirigir(response) {
    // Muestra el mensaje de éxito solo si la respuesta indica éxito
    if (response.includes("correctamente")) {
        // Muestra el modal
        alert("Orden creada correctamente");
        window.location.href = "index.html";
    } else {
        // Manejar casos de error o respuesta no esperada aquí
        alert("Hubo un error al procesar la orden. Inténtalo de nuevo.");
    }
}
