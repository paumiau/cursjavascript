function crecer(){
    pika.width=300;
    pika.height=300;
}
function decrecer(){
    pika.width=200;
    pika.height=200;           
}
function mensaje(){
    alert("Hola Soy Pikachu!")
}
function mensaje2(){
    alert("Hola Soy tu padre")
}
/*
//METODO 2

function inicializa(){
    var pika=document.getElementById("pika");
    pika.onmouseover=crecer;
    pika.onmouseout=decrecer;
    pika.onclick=mensaje;
}*/

//METODO 3
function inicializa(){
    var pika=document.getElementById("pika");
    pika.addEventListener("mouseover",crecer);
    pika.addEventListener("mouseout",decrecer);
    pika.addEventListener("click",mensaje);
    pika.addEventListener("click",mensaje2);
}
window.onload=inicializa;
