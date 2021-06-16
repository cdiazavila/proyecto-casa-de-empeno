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
  
   
</head>
<body>
    <header>

    <div id="titulo">
        <h2>Casa De Empeño</h2>
      
        </div>  
        <img src="../imagenes/img2.jpg">
    <nav>
     <ul>
             <a href="VistaPrincipal.php">Empeño</a> 
             <a href="#"><samp class="glyphicon  glyphicon-plus" ></samp> Registro Producto </a>
             <a href="VistaRegistrarPago.php"> <samp class="glyphicon  glyphicon-plus" ></samp> Registrar Pago</a>
             <a href="#"><samp class="glyphicon glyphicon-list-alt" > Editar Datos </samp></a>
             <a href="#"><samp class="glyphicon glyphicon-log-in" ></samp>  Salir</a>
      
       </ul>
    </nav>
    </header>
    
   <nav></nav>
    <section id="container">

      <div class="formulario">
          <h2>Registre el Cliente</h2>
         <form  id="formulario" method="post">
            
                 <label for="id">Id Cliente</label><br>
                 <input type="text" class="form-control" placeholder="id" id="idc" name="idc">
            
                 <label for="nombre">Nombres</label><br>   
                 <input type="text" class="form-control" placeholder="Nombres" id="nombre" name="nombre">
              
                 <label for="Apellidos">Apellidos</label>
                 <input type="text" class="form-control" placeholder="Apellidos" id="apellido" name="apellido">
            
                 <label for="telefono">Telefono</label>
                 <input type="number" class="form-control" placeholder="Telefono" id="telefono" name="telefono">

                 <label for="correo">Correo</label>
                 <input type="email" class="form-control" placeholder="Email" id="email" name="email"><br>

                <button type="submit" class="btn btn-primary form-control" id="registra">Envia</button>
         
           
                <button type="reset" class="btn form-control" id="cancelar">Cancelar</button>
        
         </form>
         <div class="mensaje mt-5"></div>
      </div>
    </section>
    

    <footer><p>Casa de empeño &</p></footer>
<script src="../js/RCliente.js"></script>
    
</body>
</html>