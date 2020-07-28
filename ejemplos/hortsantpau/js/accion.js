function crecer(evento){ //ponems evento para pasar el nombre de la imagen
    evento.target.classList.add("img-thumbnail"); 

}
function decrecer(evento){ //ponemos evento para pasar el nombre de la imagen
    evento.target.classList.remove("img-thumbnail"); 
}

function oculta(evento){
    //evento.target.width=10;
    //evento.target.classList.add("img-thumbnail"); 
}

function inicializa(){
    //var imgs=document.getElementsByClassName("kk"); //seleccionamos por clase
    var imagenes=document.querySelectorAll("img") //seleccionamos por etiqueta
    for (let imagen of imagenes){
        imagen.addEventListener("mouseover",crecer);
        imagen.addEventListener("mouseout",decrecer);
        imagen.addEventListener("click",oculta)
    }
    
}
window.onload=inicializa;