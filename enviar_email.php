<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "ntdesweb@gmail.com"; // Cambia esto al correo electrónico al que deseas enviar el mensaje
    $asunto = "Nuevo mensaje de contacto de $nombre";

    $mensajeCorreo = "Nombre: $nombre\n";
    $mensajeCorreo .= "Correo Electrónico: $correo\n";
    $mensajeCorreo .= "Mensaje:\n$mensaje";

    $cabeceras = "From: $correo\r\n";

    // Envía el correo electrónico
    if (mail($destinatario, $asunto, $mensajeCorreo, $cabeceras)) {
        echo "Correo enviado con éxito";
    } else {
        echo "Error al enviar el correo";
    }
}
?>
