<?php
  
  include_once('configuracion.php');
  $conexion=new PDO('mysql:host=localhost; dbname=casa_empeno', $usuario_bd,$clave_bd );
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conexion->exec("SET CHARACTER SET UTF8");
       
?>