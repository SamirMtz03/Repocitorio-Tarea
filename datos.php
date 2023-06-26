<?php
$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$telefono = $_POST ['telefono'];
$sitioweb = $_POST ['sitio_web'];
$asunto = $_POST ['asunto'];
$mensaje = $_POST ['mensaje'];

/*$nombre = $_GET ['nombre'];
$email = $_GET ['email'];
$telefono = $_GET ['telefono'];
$sitioweb = $_GET ['sitio_web'];
$asunto = $_GET ['asunto'];
$mensaje = $_GET ['mensaje'];*/
echo $nombre. "/" . $email. "/" . $telefono. "/" . $sitioweb. "/" . $asunto. "/" . $mensaje;
?>