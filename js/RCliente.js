// declaramos todas las variables 
const formulario = document.getElementById('formulario');
const idc = document.getElementById('idc');
const nombre = document.querySelector('#nombre');
const apellido = document.getElementById('apellido');
const telefono = document.getElementById('telefono');
const email = document.getElementById('email');
const mensaje = document.querySelector('.mensaje');
const boton = document.getElementById('registra');
const  bntCancelar = document.getElementById('cancelar');

// la peticion para enviar datos 
function peticion(){
 
    let datos = new FormData(formulario);
    var url='../php/Rcliente.php';
    fetch(url,{
        method: 'POST',
        body: datos
    })
        .then( res => res.json())
        .then( data => {
          if(data==='si'){
            formulario.reset()
           
          }else{
            mensaje.innerHTML=`<div class="alert alert-danger" >El cliente existe</div>`;  
          }
          
        });
  }


// validar formulario 

function  validarFormulario(){
    if(idc.value==='' || nombre.value==='' || apellido.value==='' || telefono.value==='' || email.value===''){
        mensaje.innerHTML=`<div class="alert alert-danger" >LLene todo los campos</div>`; 

    }else{
        peticion();
        mensaje.innerHTML=`<div class="alert alert-danger" >Registro Exitoso</div>`;  
    }
}


// creo el evento click 

boton.addEventListener('click', (e)=>{
    e.preventDefault();
    validarFormulario();
    mensaje.style.display='block';
     setTimeout(() => {
         mensaje.style.display='none';
     },2000);
});

// evento del boton cancelar 

bntCancelar.addEventListener('click', e=>{
    e.preventDefault();
    formulario.reset();
});