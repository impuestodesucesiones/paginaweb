<? php
$name = $_POST['name'];
$mail =$_POST['email'];
$message = $_POST['message'];

$header = 'From: ' . $email . " \r\n";
$header
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: ". $name . " \r\n";
$message .= "Su e-mail es: " . $email . "\r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: ". date('d/m/Y', time());

$para = 'impuestodesucesionesonline@gmail.com';
$asunto = 'Asunto del mensaje';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>
