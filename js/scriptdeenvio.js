$(document).ready(function () {
    $("#formMensaje").submit(function (event) {
        event.preventDefault(); // Evita que la página se recargue

        $.ajax({
            type: "POST",
            url: "registro.php",
            data: $(this).serialize(),
            success: function (response) {
                $("#mensajeRespuesta").html(response).fadeIn();
                $("#formMensaje")[0].reset(); // Limpia el formulario
            },
            error: function () {
                $("#mensajeRespuesta").html('<div class="alert alert-danger">Error al enviar el mensaje.</div>').fadeIn();
            }
        });
    });
});