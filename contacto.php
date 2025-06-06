<?php    
$destinatario = 'sandya.2195@gmail.com';

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$empresa = $_POST['empresa'];
$asunto = $_POST['asunto'];
$email = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];   

// Construcción correcta del mensaje
$mensajeCompleto = "Mensaje: " . $mensaje . "\n";
$mensajeCompleto .= "Nombre: " . $nombre . "\n";
$mensajeCompleto .= "Apellidos: " . $apellidos . "\n";
$mensajeCompleto .= "Empresa: " . $empresa . "\n";
$mensajeCompleto .= "Correo Electrónico: " . $email . "\n";
$mensajeCompleto .= "Teléfono: " . $telefono . "\n";

// Headers de correo
$header = "From: " . $email . "\r\n";
$header .= "Reply-To: " . $email . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion();

// Envío del correo
if (mail($destinatario, $asunto, $mensajeCompleto, $header)) {
    echo "Correo enviado correctamente.";
} else {
    echo "Error al enviar el correo.";
}
?>
