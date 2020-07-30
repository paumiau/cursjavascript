function haceScroll(){
    let capa=document.getElementById("capa");
    let capaBoton=document.getElementById("capaBoton");
    console.log("la posicion del scroll es "+capa.scrollTop);
    
    //para saber si hemos llegado al final
    //hay que sumar el largo del elemento
    //a la propiedad scrollTop y ver si  hemos llegado a scrollHeight
    if(parseInt(capa.scrollTop+capa.clientHeight)>=capa.scrollHeight){
        capaBoton.style.display="block";
    }
    else{
        capaBoton.style.display="none";
    }
}

function borraCapa(){
        document.body.removeChild(capa);
}

function inicializa(){
    capa.addEventListener("scroll",haceScroll);
    capaBoton.addEventListener("click",borraCapa);
    console.log("el largo de la capa es "+capa.clientHeight);
    console.log("el tamaño total del contenido de la capa es"+capa.scrollHeight);

}

window.onload=inicializa;