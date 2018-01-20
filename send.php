<?php
error_reporting(0);
$nombre = $_POST['nombre'];
$correo_electronico= $_POST['email'];
// $poblacion = $_POST['poblacion'];
// $sexo=$_POST['GrupoOpciones1'];
$aficiones=$_POST['comentarios'];
// $radio= $_POST['GrupoOpciones2'];
// $opinion=$_POST['opinion'];
$header = 'From: ' . $mail . ", de la poblacion ".$aficiones."\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Nombre y Apellido : " . $nombre . " \r\n";
$mensaje .= "email :  " . $mail . " \r\n";
// $mensaje .= "sexo" . $_POST['GrupoOpciones1'] . " \r\n";
$mensaje .= $_POST['comentarios'] . " \r\n";
// $mensaje .= "que opinas de nuestra pagina" . $_POST['GrupoOpciones2'] . " \r\n";
// $mensaje .="danos tu opinion".$_POST['opinion'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'gustavo@ggdisenio.com.ar';
$asunto = 'Cotizacion Web';

mail($para, $asunto, utf8_decode($mensaje), $header, $correo_electronico);

echo 'Gracias por ponerse en contacto con GG Diseño, te contactaremos a la brevedad.';

header("Location: http://www.ggdisenio.com.ar");
exit();

?>
