
function mueve(ev){
    let heli=document.getElementById("helicoptero");
    //let velocidad=document.getElementById("vel");
    //let v=parseInt(velocidad.textContent);
    if(ev.key=="ArrowUp"){
            heli.style.top=heli.offsetTop-10+"px";
    }
    if(ev.key=="ArrowDown"){
        heli.style.top=heli.offsetTop+10+"px";
    }
    if(ev.key=="ArrowRight"){
        heli.style.left=heli.offsetLeft+10+"px";
    }
    if(ev.key=="ArrowLeft"){
        heli.style.left=heli.offsetLeft-10+"px";
    }
    if(ev.key==" ") dispara();
}

async function dispara() {
    //alert ( window.innerWidth)
    let heli=document.getElementById("helicoptero");
    let disparo=document.getElementById("disparo");
    disparo.style.visibility="visible"; //Hago visible el disparo
    disparoX=heli.offsetLeft+10;
    disparoY=heli.offsetTop+20;
    for (disparoIni=disparoX;disparoX<window.innerWidth;disparoX=disparoX+5){ //hago que se mueva en horizontal
        await sleep(1);
        disparo.style.left=disparoX+"px";
        disparo.style.top=disparoY+"px";
    }
    disparo.style.visibility="hidden"; //lo vuelvo a esconder
}

async function mueveTrump() {
    let fin=false; 
    let trump=document.getElementById("trump");
    let disparo=document.getElementById("disparo");
    let heli=document.getElementById("helicoptero");
    let direcX=5; //marco las direcciones irá hacia la derecha y hacia arriba
    let direcY=-5;


    while (fin==false){  //Se ha acabado el juego?
        trumpPos = trump.getBoundingClientRect(); //utilizo este objeto que nos da las esquinas de los dibujos
        disparoPos = disparo.getBoundingClientRect();
        heliPos = heli.getBoundingClientRect();

        trump.style.left=trump.offsetLeft+direcX+"px"; //muevo al trump
        trump.style.top=trump.offsetTop+direcY+"px";
        await sleep(1); //Pausa

        // console.log(trumpPos.left+" "+trumpPos.right); //Para hacer pruebas
        
        //comprueba si hay colision de trump con el helicoptero
        if (trumpPos.left+50<= heliPos.right && trumpPos.right-50>= heliPos.left &&
            trumpPos.bottom>= heliPos.top &&  trumpPos.top <= heliPos.bottom){
            alert("Mierda! Estas muerto");
            fin=true;
            location.reload();
        }

        //compruebo si les has dado
        if (disparo.style.visibility="visible" && trumpPos.left+50 <= disparoPos.right && trumpPos.right-50>= disparoPos.left &&
            trumpPos.bottom>= disparoPos.top &&  trumpPos.top<= disparoPos.bottom){
            alert("BRAVO! has matado a Trump!");
            fin=true;
            location.reload();
        }
        //movemos al trump
        //trumpX=trump.offsetLeft;
        //trumpY=trump.offsetTop;
        if (trumpPos.right>=window.innerWidth) { //si toca el borde derecho
            direcX=-5;
            trump.style.backgroundImage="url('img/trumpL.png')"; //le doy la vuelta al trump
        }
        if (trumpPos.left<=0) { //si toca el borde izquierdo
            direcX=5;
            trump.style.backgroundImage="url('img/trumpR.png')";
        }
        if (trumpPos.bottom>=window.innerHeight) direcY=-5 //si toca los bordes superiores
        if (trumpPos.top<=0) direcY=5

    }
}


function sleep(ms) {  //Funcion para hacer pausa
    return new Promise(resolve => setTimeout(resolve, ms));
  }

function inicializa(){ //empezamos!
    document.body.addEventListener("keydown",mueve);
    mueveTrump();
}

window.onload=inicializa;