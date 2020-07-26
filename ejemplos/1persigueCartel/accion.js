function mueve(ev){
    let cartel=document.getElementById("cHola");
    cartel.style.left=ev.clientX+"px";
    cartel.style.top=ev.clientY+"px";
}
function inicializa(){
    document.body.addEventListener("mousemove", mueve);
}
window.onload=inicializa;