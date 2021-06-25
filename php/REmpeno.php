<?php
   try{
       $idc=$_POST['idC'];
       $idA=$_POST['idA'];
       $producto=$_POST['producto'];
       $fechaInicio=$_POST['fechainicio'];
       $precio=$_POST['precio'];
       $descripcion=$_POST['descrip'];
       $fechaFinal=$_POST['fechafinal'];
       include_once('conexion.php');
       $sql = "INSERT INTO empeno VALUES ('', '$idc', '$idA', '$producto', '$fechaInicio', '$precio', '$descripcion', '$fechaFinal')";
       $resultado=$conexion->prepare($sql);
       $resultado->execute();
       echo json_encode('si');
         
    }catch(Exception $e){
       die("Error" . $e->getMessage());
       echo "linea del error".$e->getLine();

    }
?>