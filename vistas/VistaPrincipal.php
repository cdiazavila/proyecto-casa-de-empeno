<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empeño</title>
    <link rel="stylesheet" href="../css/vistaP.css">
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
             <a href="VistaRegistrarCliente.php"><samp class="glyphicon glyphicon-plus" ></samp> Registrar Cliente</a> 
             <a href="#"><samp class="glyphicon glyphicon-list-alt"> Ver empeños</samp></a>
             <a href="vistaInventario.php"><samp> Inventario</samp></a>
             <a href="#"><samp class="glyphicon glyphicon-list-alt"> Editar Datos </samp></a>
             <a  href="cerrer_sesion.php"  onclick="localStorage.clear()"><samp class="glyphicon glyphicon-log-in"></samp>  Salir</a>
      
       </ul>
     
    </nav>
    </header>

    <aside></aside>
    <section id="container">

      <div class="formularioEmpeno">
          <h2>Registre el empeño</h2>
          <div id="mensaje" class="mensaje" ></div>
         <form id="formulario"  method="post">
             <div class="id">
             <label for="id">Id Cliente</label><br>
             <input type="text" class="form-control" id="idC" name="idC">
             </div>

             <div class="producto">
             <label for="id">Producto</label><br>   
              <input type="text"  class="form-control" id="producto" name="producto">
             </div>
             <div class="fecha">
                 <input type="text" class="form-control" id="fechaInicio" name="fechainicio">
                 
             </div>
              
             <div class="precio">
                 <label for="precio">Precio</label>
                 <input type="number" class="form-control" id="precio" name="precio">
             </div>

             <div class="descripcion">
                 <label for="des">descripcion</label><br>
                <textarea name="descrip" id="descrip" cols="50" rows="2" class="desc form-control" ></textarea>
             </div>
             <div class="fecha-final">
                 <label for="fecha">Fecha final</label><br>
                 <input type="date" class="form-control" id="fecha-final" name="fechafinal">
             </div>

             <div class="ida">
               
                 <input type="text" class="form-control" id="idA" name="idA">
             </div>

            <div class="buton">
              <button  type="submit" class="btn btn-primary form-control">Envia</button>
              
              
              <button type="reset" class="btn form-control" id="cancelar">Cancelar</button>
             </div>

             <button class="btn btn-primary  form-control" id="verificar">Verificar</button>
         </form>
      
        
      </div>
    </section>
    <aside>

    </aside>

    <footer><p>Casa de empeño &</p></footer>
    <script src="../js/empeno.js"></script>
  
</body>
</html>