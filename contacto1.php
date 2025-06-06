<?php

$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$opcion = $_POST['asunto'];
$empresa = $_POST['empresa'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];



$destinatario = "sandya.2195@gmail.com";
$asunto = "envio un correo de prueba";

$cuerpo = '
<html>
   <head>
        <title>
        Prueba de envio
        </title>
    <body>
        <h1>solicitud de contacto desde correo </h1>
        <p>
           Contacto: '.$nombre.'-'.$asunto.'<br>
           Mensaje: '.$nombre.'-'.$apellidos.'-'.$opcion.'-'.$empresa.'-'.$correo.'-'$telefono'-'$mensaje'
    </body>
</html>
';

$headers = "MIME-Version:1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF8\r\n";

$headers .= "FROM: $nombre <$correo>\r\n";
mail($destinatario,$asunto,$cuerpo,$headers);

echo "correo enviado";
?>

<a href="contacto.html">Volver a inicio</a>