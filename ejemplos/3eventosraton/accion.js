function verde(){
    capa.style.backgroundColor="green";
}

function transparente(){
    capa.style.backgroundColor="transparent";
}

function rojoAzul(ev){
    if(ev.button==0){
        capa.style.backgroundColor="red";
     } else if(ev.button==2){
        capa.style.backgroundColor="blue";
    }
}

function inicializa(){
    var capa=document.getElementById("capa");
    capa.addEventListener("mouseenter",verde);
    capa.addEventListener("mouseleave",transparente);
    capa.addEventListener("mousedown",rojoAzul);
    capa.addEventListener("mouseup",verde);
 
}

window.onload=inicializa;