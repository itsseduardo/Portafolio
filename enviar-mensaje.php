<?php
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $tema = $_POST['tema'];
  $mensaje = $_POST['mensaje'];

  $to = 'jeasarria05@gmail.com';
  $subject = 'Mensaje desde sitio web';
  $body = "Nombre: $nombre\nTelefono: $telefono\nCorreo: $correo\nTema: $tema\nMensaje: $mensaje";

  mail($to, $subject, $body);
?>

<h1>Gracias por enviar tu mensaje!</h1>
<p>Su mensaje ha sido enviado correctamente.</p>