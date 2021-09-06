<?php
   try{
       $fechaI=$_POST['fechaI'];
       $fechaF=$_POST['fechaF'];
       include_once('conexion.php');
       $matriz = array();
       $sql = "SELECT * FROM pago,`admin`,cliente WHERE (fecha BETWEEN '$fechaI' AND '$fechaF') AND pago.idC=cliente.Cedula AND pago.idA=admin.id" ;
        $resultado=$conexion->prepare($sql);
        $resultado->execute();
        $numero_registro=$resultado->rowCount();
        if($numero_registro!=0){
            
            foreach ($conexion->query($sql, PDO::FETCH_ASSOC) as $item) $matriz[] = $item;
            echo json_encode($matriz);
         
                 
        }else{
          echo json_encode('no');
        }
         
    }catch(Exception $e){
       die("Error" . $e->getMessage());
       echo "linea del error".$e->getLine();
       
    }
?>