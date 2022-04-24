<?php
/*en esta pagina se ultiza lo que es el envio de email al correo de la pagina , inmediatamete seleccione enviar , mostrar un mesaj en pantalla diciendo que el  mensaje que ha enviado el cliente se envio exitosamente*/
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $mensaje=$_POST['mensaje'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje= "Este mensaje fue enviado por: " . $name . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Teléfono de contacto: " . $phone . " \r\n";
$mensaje.= "Mensaje: " . $_POST['message'] . " \r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$destinatario='restaurantthestars@gmail.com';
$mensaje= 'Mensaje de RESTAURANT THE STARS';

mail($destinatario,  $mensaje, utf8_decode($mensaje), $header);
header("Location:index.html");
?>