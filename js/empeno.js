
  //declaracion de mis variables de trabajos 
  const formulario=document.getElementById('formulario');
  const idC = document.querySelector('#idC');
  const producto = document.querySelector('#producto');
  const fechaInicio= document.querySelector('#fechaInicio');
  /*const idC = document.querySelector('#idC');
  const idC = document.querySelector('#idC');
  const idC = document.querySelector('#idC');
  const idA = document.querySelector('#idA');
*/
  let fecha = new Date();
  const anoActual = fecha.getFullYear();
  const dia = fecha.getDate();
  const mesActual = fecha.getMonth() + 1;

 // creamos el evento addEventListener
 window.addEventListener('load',()=>{
     
    fechaInicio.value= anoActual+'-'+mesActual+'-'+dia;
    console.log(fecha);
    idA.style.display='none';
    

 });