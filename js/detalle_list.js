
console.log("jQuery version: " + $.fn.jquery);

$(document).ready(function() {
    cargarDetalles();
});

function cargarDetalles() {
    $.ajax({
        url: "get_detalles.php",
        method: "GET",
        success: function(data) {
            $("#detalleList").html(data);
        }
    });
}
