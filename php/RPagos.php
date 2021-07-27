<?php
   try{
       $cc=$_POST['cc'];
       $idA=$_POST['idA'];
       $fecha=$_POST['fecha'];
       $monton=$_POST['monton'];
       include_once('conexion.php');
       $sql = "INSERT INTO pago VALUES ('', '$cc', '$idA', '$fecha', '$monton')";
       $resultado=$conexion->prepare($sql);
       $resultado->execute();
       echo json_encode('si');
         
    }catch(Exception $e){
       die("Error" . $e->getMessage());
       echo "linea del error".$e->getLine();

    }
?>