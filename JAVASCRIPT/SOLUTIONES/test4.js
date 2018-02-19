window.addEventListener('load', cargaEventos);


function cargaEventos(){
    document.getElementById("uno").addEventListener("change",canvi);
    document.getElementById("uno").addEventListener("focus",foco);
    document.getElementById("dos").addEventListener("change",canvi);
    document.getElementById("dos").addEventListener("focus",foco);
}


var qfoco=null;
console.log("foco:"+qfoco);


function foco(){
    if(this!=qfoco){
        //cambio de foco
        qfoco=this;
        console.log("foco:"+qfoco);
        alert("cambio foco");
    }else{
        console.log("no cambio foco:"+qfoco);

    }
}

function canvi(){
    alert("cambio");
}