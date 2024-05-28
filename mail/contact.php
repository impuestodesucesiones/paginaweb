<?php
if(empty($_POST['name']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = "impuestodesucesionesonline@gmail.com";
$subject = "Nuevo mensaje de $name";
$body = "Ha recibido un nuevo mensaje desde el formulario de contacto de su sitio web\n\n Aqui estan los detalles:\n\nName: $name\n\n\nSubject: $m_subject\n\nMessage: $message";
$header = "From: $email";
$header .= "Reply-To: $email";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
