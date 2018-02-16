window.addEventListener("load", cargaEventos);


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

var semaforo=true;

function cargaEventos() {
    var listaInputs = document.getElementsByTagName("input");
    for (i = 0; i < listaInputs.length; i++) {
        listaInputs[i].addEventListener("change", newValue); 
        listaInputs[i].addEventListener("blur", perderFocus);
        //listaInputs[i].addEventListener("click", redText);
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

function redText() {           
      alert("cambiamos color");
      document.getElementById("Nombre").style.color = "magenta"; 
      //document.getElementsByName("input").textObject.style.color="red";
      //document.getElementById(listaInputs).style.color = "magenta";       
      document.formulario.className="";
      document.getElementsByName("input").className="redText";

}





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

