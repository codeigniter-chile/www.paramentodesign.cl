<?php
// Guardar los datos recibidos en variables:
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$como = $_POST['como'];

// Campos nuevos
$pagina = $_POST['pagina'];
$dest = $_POST['dest'];

// Definir el correo de destino:
 
// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
$headers = "From: $nombre <$email>\r\n";  
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Aqui definimos el asunto y armamos el cuerpo del mensaje
$asunto = "Contacto PD";
$cuerpo .= "Formulario de contacto de www.paramentodesign.cl"."<br>";
$fecha = date("d-m-Y");
$cuerpo .= "Enviado: ".$fecha."<br>";
$cuerpo .= "Nombre: ".$nombre."<br>";
$cuerpo .= "Email: ".$email."<br>";
$cuerpo .= "Como nos conocio: ".$como."<br>";
$cuerpo .= "Telefono: ".$telefono."<br>";
$cuerpo .= "Pagina Vista: ".$pagina."<br>";
$cuerpo .= "Mensaje: ".$mensaje;

// Esta es una pequena validación, que solo envie el correo si todas las variables tiene algo de contenido:
if($nombre != '' && $email != '' && $telefono != '' && $mensaje != '')
   {
      mail($dest,utf8_decode($asunto),utf8_decode($cuerpo),utf8_decode($headers)); //ENVIAR!
   }
?>