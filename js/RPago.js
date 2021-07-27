// declaramos las variables 

const formularioBuscar=document.getElementById('formulario-buscar');
const ccBuscar=document.querySelector('#cc-buscar');
const botonBuscar=document.querySelector('#buscar');
const tabla=document.querySelector('.tabla');
const valorEmpeno=document.getElementById('Valor-empeno');
const  formularioRegistro=document.querySelector('.formularioRegistro');
const  cc=document.getElementById('cc');
const  idA=document.getElementById('idA');
const  fechas=document.getElementById('fecha');
const  monton=document.getElementById('monton');
const  dueda=document.getElementById('deuda');
const  errorm1=document.getElementById('ErrorM1');
const  errorm2=document.getElementById('ErrorM2');


 
// metodo que me octiene la fecha actual del sistema 
  let fecha = new Date();
  const anoActual = fecha.getFullYear();
  const dia = fecha.getDate();
  const mesActual = fecha.getMonth() + 1;
 
  window.addEventListener('load',()=>{
     
    fechas.value= anoActual+'-'+mesActual+'-'+dia;
    idA.style.display='none';
    fechas.style.display = 'none';
    idA.value=localStorage.getItem('id'); ;
    console.log(fechas.value)
 });
// realizamos el metodo para la peticion de la busqueda de los pagos realizados por el 
//cliente  dueño de la cc ingresada

function buscarCliente(){
 
    let datos = new FormData(formularioBuscar);
    var url='../php/Cpago.php';
    fetch(url,{
        method: 'POST',
        body: datos
    })
        .then( res => res.json())
        .then( data => {
            if(data==='no'){
                errorm1.innerHTML=`<div class="alert alert-danger" role="alert">El cliente no se encuentra Registrado</div>`
                errorm1.style.display='block';
             setTimeout(() => {
                  errorm1.style.display='none';
             },3000);
            
            }else{
           cc.value=ccBuscar.value;
           var costoPagar,suma=0;
          let tbody=document.createElement('tbody');
           
          for(let i=0; i< data.length; i++){
            tbody.innerHTML +=`<tr>
            <td>${data[i].nombre}</td>
            <td>${data[i].apellido}</td>
            <td>${data[i].Cedula}</td>
            <td>${data[i].Nombres}</td>
            <td>${data[i].Apellidos}</td>
            <td>${data[i].fecha}</td>
            <td>${data[i].monton}</td>
            </tr>
             
              `;
            
           suma+=parseInt(data[i].monton);
          }
          
          tabla.appendChild(tbody);
          valorEmpeno.innerText=`Precio De Empeño: $ ${data[0].precio}`;
          costoPagar=parseInt(data[0].precio)-suma;
          if(costoPagar<=0){
          dueda.textContent='DEUDA CANCELADA'
          dueda.style.background='#2EED03';
          }else{
            dueda.textContent=`Deuda Pendiente: $ ${costoPagar}`;
          
          }
         
            }
          
        });
  }


  // metodo que me pernita insertar un nuevo pago a la bd 

  function insertarPago(){
    let datosIsertar = new FormData(formularioRegistro);
    var url='../php/RPagos.php';
    fetch(url,{
        method: 'POST',
        body: datosIsertar
    })
    .then( res => res.json())
    .then( data => {
        if(data==='si'){
            errorm2.innerHTML=`<div class="alert alert-danger" role="alert">Pago Registrado Correctamente!!</div>`
            errorm2.style.display='block';
        }else{
          errorm2.innerHTML=`<div class="alert alert-success" role="alert">Pago Incorrecto</div>`
            errorm2.style.display='block';
        }
      setTimeout(() => {
        errorm2.style.display='none';
      }, 2000);
    });
  }
// validamos que le campo no este vacio

function validar(){
    if(ccBuscar.value==''){
       
        errorm1.innerHTML=`<div class="alert alert-danger" role="alert">Ingrese La CC a buscar</div>`
        errorm1.style.display='block';
     setTimeout(() => {
          errorm1.style.display='none';
     },3000);
    }else{
        buscarCliente();

    }
}
// creamos el evento click 
botonBuscar.addEventListener('click', (e)=>{
    e.preventDefault();
       
        validar();
     
});

// validar formulario Insertar Pago 

function validarIsertarPago(){
    if(cc.value===''){
      errorm2.innerHTML=`<div class="alert alert-danger" role="alert">Ingrese un Id de Usuario</div>`
      errorm2.style.display='block';
      
    }else if(monton.value===''){
        errorm2.innerHTML=`<div class="alert alert-danger" role="alert">Ingrese un Monto</div>`
        errorm2.style.display='block';
     
    }else{
        insertarPago();
       
    }
    setTimeout(() => {
        errorm2.style.display='none';
   },2000);

}

// motodo para el evento submit

formularioRegistro.addEventListener('submit',(e)=>{
     e.preventDefault();
     validarIsertarPago();
})

