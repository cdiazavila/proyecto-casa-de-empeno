// declaramos las variables
const formulario=document.getElementById('formularios');
const usuario=document.querySelector('#usuario');
const clave=document.querySelector('#clave');
const mensaje=document.querySelector('.mensaje');

//metodo para validar si los datos de ingreso son correctos o existen en la base de datos 


function peticion(){
 
    let datos = new FormData(formulario);
    var url='php/login.php';
    fetch(url,{
        method: 'POST',
        body: datos
    })
        .then( res => res.json())
        .then( data => {
        // en esta parte verificamos si los datos devueltos por el .json son correctos
          if(data==='no'){
             mensaje.innerHTML=`<div class="alert alert-danger" role="alert">Password o Usuario Incorrectos</div>`
             formulario.reset();
            }else{
              location.href='vistas/VistaPrincipal.php';   
              for(let i=0; i<data.length; i++){
               localStorage.setItem('id',data[i].id); 
               localStorage.setItem('nombre',data[i].nombre); 
              } 
          }
          
        });
  }


  // con este metodo validamos que  los campos esten llenos 

  function validarFormulario(){
  
      if(usuario.value=='' || clave.value==''){
        mensaje.innerHTML=`<div class="alert alert-danger">LLene todo los campos</div>`;
        
      }else{
        peticion();
      }   
  }
  // creamos el evento submit 

  formulario.addEventListener('submit', (e)=>{
       e.preventDefault();
      
         validarFormulario();

         // en esta parte el mensaje se oculta 
         mensaje.style.display = 'block';
         setTimeout(() => {
             mensaje.style.display = 'none';
         }, 2000);

        
  });
