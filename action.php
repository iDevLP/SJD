<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombrecontacto"];
    $apellido = $_POST["apellidocontacto"];
    // Obtén otros valores del formulario

    // Configura el destinatario del correo
    $destinatario = "lui.pasten@duocuc.cl";

    // Asunto del correo
    $asunto = "Nuevo formulario de contacto";

    // Contenido del correo
    $mensaje = "Nombre: $nombre\nApellido: $apellido\n"; // Agrega otros campos aquí

    // Cabeceras del correo
    $cabeceras = "From: noreply@example.com";

    // Envía el correo
    $enviado = mail($destinatario, $asunto, $mensaje, $cabeceras);

    if ($enviado) {
        echo "Correo enviado correctamente.";
    } else {
        echo "Error al enviar el correo.";
    }
} else {
    echo "estoy aca";
}


?>