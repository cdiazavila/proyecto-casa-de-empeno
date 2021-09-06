
const tabla=document.querySelector('.tabla');
const   totalIngresos=document.getElementById('Valor-empeno');
const  formularioRegistro=document.querySelector('.formularioRegistro');
const  fechaI=document.getElementById('fechaI');
const  fechaF=document.getElementById('fechaF');
const  errorm1=document.getElementById('ErrorM1');
const  errorm2=document.getElementById('ErrorM2');

// motodo para el evento submit

function crearInventario(){
 
    let datos = new FormData(formularioRegistro);
    var url='../php/inventario.php';
    fetch(url,{
        method: 'POST',
        body: datos
    })
        .then( res => res.json())
        .then( data => {
            if(data==='no'){
                errorm1.innerHTML=`<div class="alert alert-danger" role="alert">No hay ingresos en la fecha</div>`
                errorm1.style.display='block';
             setTimeout(() => {
                  errorm1.style.display='none';
             },3000);
            
            }else{
                console.log(data)
    
           var suma=0;
          let tbody=document.createElement('tbody');
           
          for(let i=0; i< data.length; i++){
            tbody.innerHTML +=`<tr>
            <td>${data[i].id}</td>
            <td>${data[i].nombre}</td>
            <td>${data[i].Cedula}</td>
            <td>${data[i].Nombres}</td>
            <td>${data[i].Apellidos}</td>
            <td>${data[i].fecha}</td>
            <td>${data[i].monton}</td>
            </tr>
             
              `;
            
           suma+=parseInt(data[i].monton);
          }
          totalIngresos.textContent=`El total de Ingreso: ${suma}`;
          tabla.appendChild(tbody);
          
         
            }
          
        });
  }

  // la validamos los campos del formulario 

  function validar(){
      if(fechaI.value =="" || fechaF.value==""){
        errorm1.innerHTML=`<div class="alert alert-danger" role="alert">LLene todo los campos</div>`
        errorm1.style.display='block';
     setTimeout(() => {
          errorm1.style.display='none';
     },3000);  

      }else{
        crearInventario();
      }
  }

formularioRegistro.addEventListener('submit',(e)=>{
     e.preventDefault();
      validar();  
}) 


