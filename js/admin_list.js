$(document).ready(function() {
    cargarAdministradores();
});

function cargarAdministradores() {
    $.ajax({
        url: "get_administradores.php",
        method: "GET",
        success: function(data) {
            $("#id_admin").html(data);
        }
    });
}
