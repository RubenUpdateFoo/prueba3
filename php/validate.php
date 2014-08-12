 <?php
sleep(3);

     require_once('consulta.php'); 
     $obj = new waxo();
    
 $name = $_POST['nombre'];
 $age = $_POST['edad'];
 $fon = $_POST['cuanto'];
 $com = $_POST['justificacion'];
 $obj->ingresar3($name,$age,$fon,$com);
  
/*
 if (isset($name)) {	
	$tipo = 'Petición de aumento de sueldo';
	$mail = 'Se ha recibido una petición de sueldo a través del formulario de la Intranet. Los datos son los siguientes:<br /><br />
	<strong>Nombre:</strong> '.$name.'<br />
	<strong>Cantidad:</strong> '.$age;
	$headers .= "From: taller@esucomex.cl"."\r\n";
	$headers .= 'MIME-Version: 1.0'."\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";

	mail('rock.and.roses@gmail.com', $tipo, $mail, $headers);
}*/


 ?> 