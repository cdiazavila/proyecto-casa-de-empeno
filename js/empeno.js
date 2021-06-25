
  //declaracion de mis variables de trabajos 
  const formulario=document.getElementById('formulario');
  const idC = document.querySelector('#idC');
  const producto = document.querySelector('#producto');
  const fechaInicio= document.querySelector('#fechaInicio');
  const precio = document.querySelector('#precio');
  const descripcion = document.querySelector('#descrip');
  const fechafinal = document.querySelector('#fecha-final');
  const idA = document.querySelector('#idA');
  const mensaje=document.getElementById('mensaje');
  const btnVerificar=document.getElementById('verificar');
  const cc=localStorage.getItem('id');


  let fecha = new Date();
  const anoActual = fecha.getFullYear();
  const dia = fecha.getDate();
  const mesActual = fecha.getMonth() + 1;

 // creamos el evento addEventListener para octener la fecha actual 
 window.addEventListener('load',()=>{
     
    fechaInicio.value= anoActual+'-'+mesActual+'-'+dia;
    idA.style.display='none';
    fechaInicio.style.display = 'none';
    idA.value=cc;
 });

  //creamos el meto para mandar los datos a la BD 

  function insertarDatosEmpeno(){
    var datos = new FormData(formulario);
    var url='../php/REmpeno.php';
    fetch(url,{
        method: 'POST',
        body: datos
    })
    .then( res => res.json())
    .then( data => {
      if(data==='si'){
        console.log('Datos Insertados');
      }
    });
}
// Metodo para verificar que todo los campos esten llenos 
function verificarCampos(){
  if(idC.value==''|| producto.value=='' || fechaInicio.value=='' || precio.value==''||
   descripcion.value==''|| fechafinal.value=='' || idA.value=='' ){
    mensaje.innerHTML = `
    <div class="alert alert-danger" role="alert">
              LLene todo los Campos
    </div>
    `;
    mensaje.style.display='block';
  }else{
  insertarDatosEmpeno();
  }
}

 // cevento submit 
 formulario.addEventListener('submit', e=>{
   e.preventDefault();
   verificarCampos();
  
   setTimeout(() => {
      mensaje.style.display='none';
   }, 2000);
 });


 // con este metodo verifico si el cliente existe en la BD 
 function VerificarCliente(){
  var datosC = new FormData(formulario);
  var url='../php/buscarCliente.php';
  fetch(url,{
      method: 'POST',
      body: datosC
  })
  .then( res => res.json())
  .then( data => {
    if(data==='no'){
      mensaje.innerHTML = `
      <div class="alert alert-danger" role="alert">
              EL CLIENTE NO EXISTE !!
      </div>
      `;
      mensaje.style.display='block';
    }else{
      for(let i=0; i<data.length; i++){
           alert(`Nombres : ${data[i].Nombres} Apellidos: ${data[i].Apellidos} Telefono: 
           ${data[i].Celular} `);
       } 
    }
    
  });
}
 // boton verifica si el cliente existe 

 btnVerificar.addEventListener('click',(e)=>{
   e.preventDefault();

   // aca verifico que ese campo no este vacio 
   if(idC.value==""){
    mensaje.innerHTML = `
    <div class="alert alert-danger" role="alert">
              LLene el Campo Para Verificar!
    </div>
    `;
    mensaje.style.display='block';
   }else{
    VerificarCliente();
   }
  
  // en esta parte elimino el mensaje al trascurir 2 minutos 
  setTimeout(() => {
    mensaje.style.display='none';
  }, 2000);
  
 })

