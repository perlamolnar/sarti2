window.addEventListener("load",getReady);

function getReady(){
    /* Cargar todos los eventos de la página */ 
        
}

function visor(myImg) {
    var bigImg = document.getElementById("bigImg");
    var imgText = document.getElementById("imgText");
    
    bigImg.src = myImg.src; 
    imgText.innerHTML = myImg.alt;

    document.getElementById("bigImg").innerHTML=bigImg;   
    //bigImg.parentElement.style.display = "block";  
}

