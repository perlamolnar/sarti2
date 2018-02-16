window.addEventListener("load", cargaEventos);

var semaforo=true;

function cargaEventos() {
    var listaInputs = document.getElementsByTagName("input");
    for (i = 0; i < listaInputs.length; i++) {
        listaInputs[i].addEventListener("change", newValue); 
        listaInputs[i].addEventListener("blur", perderFocus);        
       }
    document.getElementById("redBtn").addEventListener("click", redText);
}

function redText() {           
    //alert("cambiamos color");
    //document.getElementById("Nombre").style.color = "magenta"; 

        var listaInputs = document.getElementsByTagName("input");
        //console.log(listaInputs);

        for (i = 0; i < listaInputs.length; i++) { 
            //var idImputs = document.getElementById(listaInputs);
            console.log(listaInputs[i]);
            //listaInputs[i].style.color = "red";
            document.getElementById(listaInputs[i].id).style.color = "magenta"; 
            //listaInputs[i].id!!!!!!!!! . id!!!!! recogo por id!!!!

        }
        
    } 

function newValue() {
      if (semaforo){
            semaforo = false;
            var newInput = document.getElementById(this.id).value;
            alert("El texto del formulario ha sido cambiado. El nuevo texto es: " + newInput);
      }else{
            semaforo=true;
      }
}

function perderFocus() {  
      if (semaforo) {
            semaforo = false;
            var newInput = document.getElementById(this.id).value;
            alert("focus perdido");
      } else {
            semaforo = true;
      }
}


window.addEventListener("beforeunload", adios);
//window.beforeunload = adios();

window.beforeonload = function () {
    event.preventDefault();
    return "Gracias por visitar la pagina."
}
//adios();
//  window.beforeunload = function (event) {
//       event.returnValue = "Gracias por visitar la pagina.";
//   };

// window.addEventListener("beforeunload", function () {
//     returnValue = "Gracias por visitar la pagina.";
// });





// function adios() { 
      
//     alert("Gracias por visitar la página.");  
//     window.document.close(); 
     
//     }


function adios() {
      
      var respuesta = confirm("Quieres cerrar la página?");
      if (!respuesta) {
            alert("Garcias por quedar con nosotros.");
      } else {
            alert("Estas saliendo de la pagina.");
            window.document.close();
            

      }
      return respuesta;
}





function submitFormulario() {
      var respuesta = confirm("Quieres enviar el formulario?");
      if (respuesta) {
            alert("Gracias por enviarnos el formulario.");
            document.formulario.submit();

      } else {
            alert("No has enviado el formulario.");
            document.formulario.reset();
      }
      return respuesta;
}

