window.addEventListener("load", cargaEventos);
//window.addEventListener("beforeunload", adios);
//window.beforeunload = adios();
//window.beforeonload = function () {return "Gracias por visitar la pagina." }

// window.onbeforeunload = function (event) {
//     event.returnValue = "Gracias por visitar la pagina.";
// };

window.addEventListener("beforeunload", function (event) {
    event.returnValue = "Gracias por visitar la pagina.";
});

var semaforo=true;
var vectorcambios=new Array();
var myWindow;

function cargaEventos() {

    var listaInputs = document.getElementsByTagName("input");
    for (i = 0; i < listaInputs.length; i++) {
        listaInputs[i].addEventListener("change", newValue); 
        listaInputs[i].addEventListener("blur", perderFocus); 
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

function adios() { 
    alert("Gracias por visitar la página.");
    window.document.close();
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

adios();