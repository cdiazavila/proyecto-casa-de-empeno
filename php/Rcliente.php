<?php
   try{
       $idc=$_POST['idc'];
       $nombre=$_POST['nombre'];
       $apellido=$_POST['apellido'];
       $telefono=$_POST['telefono'];
       $email=$_POST['email'];
       include_once('conexion.php');
       $matriz = array();
       $sql = "INSERT INTO cliente VALUES ('$idc', '$nombre', '$apellido', '$telefono', '$email')";
        $resultado=$conexion->prepare($sql);
        $resultado->execute();
             
        echo json_encode('si');
         
    }catch(Exception $e){
       die("Error" . $e->getMessage());
       echo "linea del error".$e->getLine();

    }
?>