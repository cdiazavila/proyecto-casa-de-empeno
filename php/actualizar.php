<?php
  try{
    $id=$_POST['cc'];
    $precio=$_POST['monton'];
    include_once('conexion.php');
    $sql="UPDATE empeno SET empeno.deuda=(empeno.deuda-1000) WHERE idC='$cc'";
    $resultado=$conexion->prepare($sql);
    $resultado->execute();
    echo json_encode('si');
      
 }catch(Exception $e){
     die("Error" . $e->getMessage());
     echo "linea del error".$e->getLine();
    
  }
?>