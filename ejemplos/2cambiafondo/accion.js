function cambiaFondo(ev){
    if(ev.key=="a" || ev.key=="A"){
        let capa=document.getElementById("capa");
        var num=parseInt(Math.random()*20000);
        capa.style.backgroundImage="url('https://source.unsplash.com/random/"+num+"')";
    }
}
function inicializa(){
    document.body.addEventListener("keypress",cambiaFondo);
}
window.onload=inicializa;
