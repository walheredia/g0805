<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$localidad = $_POST['localidad'];
$tel = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$para = 'bolsanovaarg@gmail.com';
$titulo = 'GULP Web, nuevo contacto.';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Localidad: $localidad\n Teléfono: $tel\n Mensaje:\n $mensaje";

if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, nos contactaremos lo antes posible. muchas gracias.');
window.location.href = 'http://www.bolsanova.com.ar/gulp/g0805-lines/index.php';
</script>";
} else {
echo 'Falló el envio';
}
}
?>