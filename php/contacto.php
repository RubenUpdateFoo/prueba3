<?php

$nombre = $_POST['nombre'];
$cuanto = $_POST['cuanto'];
$justificacion = $_POST['justificacion'];

if (isset($nombre)) {	
	$destinatario ="rock.and.roses@gmail.com";
	$asunto="mensaje de prueba";
	$cuerpo="
    <html>
    <head>
    	<title>prueba de correo</title>
    </head>
    <body>
    <h1> correo de prueba xd</h1>
    
    </body>
    </html>

	"
//para formato html
 	
$headers="MIME-version: 1.0\r\n";
$headers.="Content-type: text/html; charset=iso-8859-1\r\n";
				
//direccion del remitente
$headers .="From: pikachu@gmail.com\r\n";

mail($destinatario,$asunto,$cuerpo,$headers);

?>
