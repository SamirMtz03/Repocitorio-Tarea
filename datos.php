<?php
$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$telefono = $_POST ['telefono'];
$sitioweb = $_POST ['sitio_web'];
$asunto = $_POST ['asunto'];
$mensaje = $_POST ['mensaje'];
echo $nombre. "/" . $email. "/" . $telefono. "/" . $sitioweb. "/" . $asunto. "/" . $mensaje;
?>