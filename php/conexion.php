<?php

$cn = mysql_connect('localhost', 'root','');
$db=mysql_select_db("pruebaBD")or die("Error en Db");
return($cn);
return($db);


?>