<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'impuestodesucesionesonline@gmail.com'; // Cambia esto por tu dirección de correo electrónico
    $subject = 'Nuevo mensaje del formulario de contacto';
    $body = "Nombre: $name\nCorreo electrónico: $email\nMensaje: $message";

    // Utiliza la función mail() para enviar el correo electrónico
    if (mail($to, $subject, $body)) {
        header("Location: contacto.html"); 
    } else {
        echo 'Hubo un error al enviar el mensaje.';
    }
}
?>
