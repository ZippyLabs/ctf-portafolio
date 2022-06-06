<?php
$nom = $_POST['nomyap'];
$email = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$header = 'De: ' . $email . " \r\n";
$header = "X-Mailer: PHP/" . phpversion() . " \r\n";
$header = "MimeVersion: 1.0/ \r\n";
$header = "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nom . " \r\n";
$mensaje = "Su email es " . $email . " \r\n";
$mensaje = "Mensaje" . $_POST['mensaje'] . " \r\n";
$mensaje = "Con fecha: " . date('d/m/Y' , time());

$para = 'marinayague1@gmail.com';
$asunto = 'Mail de repositorio ciberseguridad';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location: index.html");
?>