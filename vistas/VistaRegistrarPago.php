<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empeño</title>
    <link rel="stylesheet" href="../css/pago.css">
        <!--  Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
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
             <a href="Vistaprincipal.php">Empeño</a> 
             <a href="VistaRegistrarCliente.php"><samp class="glyphicon  glyphicon-plus" ></samp> Registro clientes </a>
             <a href="#"> <samp class="glyphicon  glyphicon-plus" ></samp> Registrar Producto</a>
             <a href="#"><samp class="glyphicon glyphicon-list-alt" > Editar Datos </samp></a>
             <a href="#"><samp class="glyphicon glyphicon-log-in" ></samp>  Salir</a>
      
       </ul>
    </nav>
    </header>
    
   <nav class="varra">
  
         <form action="#" class="row">

                 <label for="cc">Cedula</label> 
                 <input type="text" class="form-control" placeholder="cedula">
              
                <button class="btn btn-primary " id="buscar">Buscar</button>
          
         </form>

         <div id="deuda" class="pago">
               valor a pagar:200 
             </div>

             <div id="Valor-empeno" class="pago">
               Precio Empeño: 34556
             </div>

   </nav>
   <aside>
   <div class="form_RegistrarPago">
          <h2>Registrar Pago</h2>
         <form action="#" class="form-inline formul">
             
             <div class="">
                 <label for="cc">Cedula</label><br>   
                 <input type="text" class="form-control" placeholder="cedula">
             </div>
                 
               <div class="">
                 <label for="fecha">Fecha</label><br>   
                 <input type="text" class="form-control" placeholder="Fecha">
               </div>
             
                 <div class="">
                    <label for="monton">Monton</label><br>   
                    <input type="text" class="form-control" placeholder="Monton">
                 </div><br>
                 
                  <button type="submit" class="btn btn-primary form-control " id="registra">Guardar</button>
          
                  <button  type="reset" class="btn form-control " id="cancelar">Cancelar</button>
               
         </form>
      </div>
    
   </aside>
    <section id="container">
    <div id="tabla">
    <table class="table  table-striped table-hover " >
            <thead class="thead-dark">
             <tr style="color:#000000;">
                 <th>CEDULA</th>
                 <th>NOMBRES</th>
                 <th>APELLIDOS</th>
                 <th>FECHA</th>
                 <th>MONTON</th>
             </tr>
            </thead>
             <tr>
                 <td>carlos</td>
                 <td>carlos</td>
                 <td>carlos</td>
                 <td>carlos</td>
                 <td>340</td>
             </tr>
            
             </table>
             </div>
      
            
    </section>
    

    <footer><p>Casa de empeño &</p></footer>