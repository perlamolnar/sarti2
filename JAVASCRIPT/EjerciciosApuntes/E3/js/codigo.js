window.addEventListener("load", cargaEventos);

function cargaEventos() {
      document.getElementById("Nombre").addEventListener("change", newValue); 
      document.getElementById("Apellidos").addEventListener("change", newValue);
      var listaInputs = document.getElementsByTagName("input");
      // for ( i = 0; i < listaInputs.length; i++) {
      //      listaInputs[i].addEventListener("blur", perderFocus);     
      // }

      document.getElementById("DNI").addEventListener("blur", newValue);
      
       
}

function newValue() {
      var newInput = document.getElementById(this.id).value;
      alert("El texto del formulario ha sido cambiado. El nuevo texto es: " + newInput);
}

function perderFocus() {      
      alert("Has salido del campo.");
     
      
}












// function submitFormulario() {
//       var respuesta = confirm("Quieres enviar el formulario?");
//       if (respuesta) {
//             alert("Gracias por enviarnos el formulario.");
//             document.formulario.submit();
//             return true;
//       } else {
//             alert("No has enviado el formulario.");   
//             return false;        
//       }     
      
// }


//EN OTRA MANERA;
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

