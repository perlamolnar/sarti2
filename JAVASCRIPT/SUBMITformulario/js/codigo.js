function submitFormulario() {
      var respuesta = confirm("Esta seguro/a que quieres enviar el formulario?");
      if (respuesta) {
            alert("Gracias por enviarnos el formulario.");
            document.formulario.submit();
            return true;
      } else {
            alert("No has enviado el formulario.");   
            return false;        
      }     
      
}
//EN OTRA MANERA;
// function submitFormulario() {
//       var respuesta = confirm("Esta seguro/a que quieres enviar el formulario?");
//       if (respuesta) {
//             alert("Gracias por enviarnos el formulario.");
//             document.formulario.submit();

//       } else {
//             alert("No has enviado el formulario.");

//       }
//       return respuesta;
// }
