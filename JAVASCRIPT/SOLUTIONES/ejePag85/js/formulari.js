window.addEventListener('load', cargaEventos);
window.onbeforeunload = function(e) {
	var dialogText = 'Dialog text here';
	e.returnValue = dialogText;
	return dialogText;
  };

function cargaEventos(){
    alert('Benvingut a la meva pàgina!');
	document.getElementById("alta").addEventListener("click", validaEnvia);
    document.getElementById("nombre").addEventListener("change", validaNombre);
    document.getElementById("apellido1").addEventListener("blur", salidaApellido1);
    document.getElementById("edad").addEventListener("change", validarContenido);
    document.getElementById("imatge").addEventListener("mouseover", imatgeProtegida);
    document.getElementById("rojo").addEventListener("click",ponerRojo);
}

function validaEnvia() {
	var element =document.getElementById("email");
	if (element.value == ""){
		alert("El email es un campo obligatorio");
		element.focus();
		element.style.backgroundColor="red";
	}else{
		var respuesta = confirm("¿Está seguro que desea enviar el formulario?");
		if (respuesta){
			document.myForm.submit();
		} else {
			alert("El formulario no ha sido enviado."); 
		} 
	}
}

function validaNombre(){
    alert('Ha escrit el seu nom.');
}

function salidaApellido1(){
    alert('Acaba de sortir de la casella dels cognoms.');
}

function imatgeProtegida(){
    alert('Aquesta imatge està protegida');
}

function ponerRojo() {
	var labels = document.getElementsByTagName("label");
	for (var i in labels){
		labels[i].style.color="red";
	}
}

function validarContenido() {
	var elemento = document.getElementById("edad");
	var edad = elemento.value;
	if (isNaN(edad)){
	    elemento.style.backgroundColor = "red";
	    elemento.focus();
	    elemento.value="";
	}else{
	    elemento.style.backgroundColor = "";
    }
}