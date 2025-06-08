<?php

$destinatario = 'sandya.2195@gmail.com';

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
$empresa = isset($_POST['empresa']) ? $_POST['empresa'] : '';
$asunto = isset($_POST['asunto']) ? $_POST['asunto'] : '';
$email = isset($_POST['correo']) ? $_POST['correo'] : '';
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';


if (empty($nombre) || empty($email) || empty($mensaje)) {
    die("Error: Nombre, correo y mensaje son obligatorios.");
}


$mensajeCompleto = "Mensaje: $mensaje\n";
$mensajeCompleto .= "Nombre: $nombre\n";
$mensajeCompleto .= "Apellidos: $apellidos\n";
$mensajeCompleto .= "Empresa: $empresa\n";
$mensajeCompleto .= "Correo Electrónico: $email\n";
$mensajeCompleto .= "Teléfono: $telefono\n";


$header = "From: $email\r\n";
$header .= "Reply-To: $email\r\n";
$header .= "X-Mailer: PHP/" . phpversion();


if (mail($destinatario, $asunto, $mensajeCompleto, $header)) {
    echo "Correo enviado correctamente.";
} else {
    echo "Error al enviar el correo.";
}
?>

