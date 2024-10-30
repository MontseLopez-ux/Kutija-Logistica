<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['Nombre'];
    $email = $_POST['Email'];
    $telefono = $_POST['Número_de_teléfono'];
    $mensaje = $_POST['Mensaje'];

    // Correo de destino
    $destinatario = 'mlopez@almendra.mx';

    // Asunto del correo
    $asunto = 'Nuevo mensaje de formulario de contacto';

    // Construir el cuerpo del correo
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Email: $email\n";
    $cuerpo .= "Teléfono: $telefono\n";
    $cuerpo .= "Mensaje:\n$mensaje\n";

    // Enviar el correo
    $resultado = mail($destinatario, $asunto, $cuerpo);

    // Comprobar si se envió correctamente
    if ($resultado) {
        echo '<p>Tu mensaje ha sido enviado con éxito. Nos pondremos en contacto contigo pronto.</p>';
    } else {
        echo '<p>Hubo un error al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.</p>';
    }
} else {
    header("Location: index.html");
}
?>
