<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empeño</title>
    <link rel="stylesheet" href="../css/estilo.css">
        <!--  Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">  
    <link rel="stylesheet" href="../css/all.css">
   
</head>
<body>
    <header>

    <div id="titulo">
        <h2>Casa De Empeño</h2>
      
        </div>  
        <img src="../imagenes/img2.jpg">
    <nav>
     <ul>
             <a href="Vistaprincipal.php">Empeño</a> 
             <a href="VistaRegistrarCliente.php"><samp class="glyphicon  glyphicon-plus" ></samp> Registro clientes </a>
             <a href="#"> <samp class="glyphicon  glyphicon-plus" ></samp> Registrar Pago</a>
             <a href="#"><samp class="glyphicon glyphicon-list-alt" > Editar Datos </samp></a>
             <a href="#"><samp class="glyphicon glyphicon-log-in" ></samp>  Salir</a>
      
       </ul>
    </nav>
    </header>
    
   <nav></nav>
    <section id="container">

      <div class="formulario ">
          <h2>Registre el Producto</h2>
         <form action="#">
            
            
                 <label for="nombre">Nombres</label><br>   
                 <input type="text" class="form-control" placeholder="Nombres">
              
                <button class="btn btn-primary form-control" id="registra">Envia</button>
         
           
              <button type="reset" class="btn form-control" id="cancelar">Cancelar</button>
          
         </form>
      </div>
    </section>
    

    <footer><p>Casa de empeño &</p></footer>
</body>
</html>