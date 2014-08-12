<?php
class waxo
{
	
    
     public function ingresar($a,$b,$c){
     include("conexion.php");
     $sql="insert into hola1 values ('$a','$b','$c')";
		
		$cs=mysql_query($sql,$cn);
		  //echo "hola".$a.$b;
     } 

      public function ingresar2($a,$b){
     include("conexion.php");
     $sql="insert into hola2 values ('$a','$b')";
          
          $cs=mysql_query($sql,$cn);
            //echo "hola".$a.$b;
     }

      public function ingresar3($a,$b,$c,$d){
     include("conexion.php");
     $sql="insert into hola3 values ('$a','$b','$c','$d')";
          
          $cs=mysql_query($sql,$cn);
            //echo "hola".$a.$b;
     }
      	

     public function modificar($a,$b,$c){   //se modificaran todos excepto la llave primaria"nombre" ya que "nombre" es la unica refrencia, en este caso seria como el id
     include("conexion.php");
     $sql="UPDATE hola1 SET  nombre='$a',edad='$b',fono='$c'  WHERE nombre ='$a' ";
     $cs=mysql_query($sql,$cn);
     } 

 
     public function listar(){
     include "conexion.php";
     $query="select nombre,fono from hola1 where 1 order by fono desc limit 10"; //ejem selec nombre,edad from... podemos seleccionar los campos
     $resultado=mysql_query($query,$cn); //hacemos la consulta, cn aparece en nuestra coneccion
     return $resultado;
     } 
   
     
     public function listar2(){
     include("conexion.php");
     $query="select nombre,edad from hola1 where 1 order by edad desc limit 10"; //ejem selec nombre,edad from... podemos seleccionar los campos
     $resultado=mysql_query($query,$cn); //hacemos la consulta, cn aparece en nuestra coneccion
     return $resultado;
     } 

    



}// end class ejemplo
