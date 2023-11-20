$(document).ready(function() {
    $("#registrationForm").submit(function(event) {
        event.preventDefault();

        // Simulando la lógica de registro en PHP y la base de datos
        // Aquí deberías realizar una petición AJAX para enviar los datos al servidor

        // Mostrar el mensaje de registro exitoso después de un breve retraso
        $("#registroExitoso").removeClass("d-none");
        setTimeout(function() {
            $("#registroExitoso").addClass("d-none");
        }, 3000); // Ocultar el mensaje después de 3 segundos
    });
});

// scriptregistro.js

$(document).ready(function () {
    $("#registrationForm").submit(function (event) {
        event.preventDefault();

        // (Código para enviar el formulario usando Ajax)

        // Después de un registro exitoso, mostrar el mensaje
        $("#registroExitoso").removeClass("d-none");
    });
});

