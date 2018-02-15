window.addEventListener("load", cargaEventos);

var semaforo=true;
var vectorcambios=new Array();

function cargaEventos() {
      // document.getElementById("Nombre").addEventListener("change", newValue); 
      // document.getElementById("DNI").addEventListener("blur", perderFocus);

      // document.getElementById("Apellidos").addEventListener("change", newValue);
      // document.getElementById("DNI").addEventListener("blur", perderFocus);

      // document.getElementById("DNI").addEventListener("blur", perderFocus);
      // document.getElementById("DNI").addEventListener("blur", perderFocus);


      var listaInputs = document.getElementsByTagName("input");
       for ( i = 0; i < listaInputs.length; i++) {
            listaInputs[i].addEventListener("blur", perderFocus); 
           //  listaInputs[i].addEventListener("change", newValue);     
             listaInputs[i].addEventListener("keyup", cambios); 

    
       }     
      
       
}





function cambios() {
      
      var i = 0;
      var test;
      test=this.previousSibling;
      while (test != null)
            test = test.previousSibling;
            i++;

      vectorcambios[this.i]==1;

}

function perderFocus() {
      var i = 0;
      var test;
      test=this.previousSibling;
      while (test != null)
            test = test.previousSibling;
            i++;

      if (vectorcambios[this.i]==1){
            alert("priedo foco y hubo cambios");
      }else{
            alert("pierdo foco");

      }


}




// function newValue() {
//       if (semaforo){
//             semaforo = false;

//             var newInput = document.getElementById(this.id).value;
//             alert("El texto del formulario ha sido cambiado. El nuevo texto es: " + newInput);


//       }else{
//             semaforo=true;
//       }

      
// }

// function perderFocus() {  
//       if (semaforo) {
//             semaforo = false;

//             var newInput = document.getElementById(this.id).value;
//             alert("focus perdido");


//       } else {
//             semaforo = true;
//       }

// }














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

