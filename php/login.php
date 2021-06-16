<?php
   try{
       $usuario=$_POST['usuario'];
       $clave=$_POST['clave'];
       include_once('conexion.php');
       $matriz = array();
        $sql="SELECT * FROM `admin` WHERE usuario = '$usuario' AND clave = '$clave'";
        $resultado=$conexion->prepare($sql);
        $resultado->execute();
        $numero_registro=$resultado->rowCount();
        if($numero_registro!=0){
            session_start();
            $_SESSION["usuarios"]=$_POST["usuario"];
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