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


//COMENTARIOS DE CLASSE:


// event.preventDefault()

// $(document).ready(function () {
//     $('#theIdOfMyForm').submit(function (event) {
//         if (!this.checkValidity()) {
//             event.preventDefault();
//         }
//     });
// });

// if (!myform.checkValidity()) {
//     if (myform.reportValidity) {
//         myform.reportValidity();
//     } else {
//         //warn IE users somehow
//     }
// }


//acostumbrar a usar return!! SIEMPRE PEDRI QUE DEVUELVE ALGO

// function mifuncion() {
//     var resultado=false;

//     if (algo)resultado=parent
//     if (otracosa) resultado=impar
    

//     return false;
// }


// function mifuncion() {
//     var resultado = par;

//     if (algo) return par
//     if (otracosa) retur impar


//     return resultado;
// }


