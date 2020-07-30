
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
    disparo.style.visibility="visible";
    disparoX=heli.offsetLeft+10;
    disparoY=heli.offsetTop+20;
    for (disparoIni=disparoX;disparoX<disparoIni+1000;disparoX=disparoX+5){
        await sleep(1);
        disparo.style.left=disparoX+"px";
        disparo.style.top=disparoY+"px";
    }
    disparo.style.visibility="hidden";
}

async function mueveTrump() {
    let fin=false;
    let trump=document.getElementById("trump");
    let disparo=document.getElementById("disparo");
    let heli=document.getElementById("helicoptero");
    let direcX=5;
    let direcY=-5;


    while (fin==false){
        trumpPos = trump.getBoundingClientRect();
        disparoPos = disparo.getBoundingClientRect();
        heliPos = heli.getBoundingClientRect();

        trump.style.left=trump.offsetLeft+direcX+"px";
        trump.style.top=trump.offsetTop+direcY+"px";
        await sleep(1);

        console.log(trumpPos.left+" "+trumpPos.right);
        
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
        if (trumpPos.right>=window.innerWidth) {
            direcX=-5;
            trump.style.backgroundImage="url('img/trumpL.png')";
        }
        if (trumpPos.left<=0) {
            direcX=5;
            trump.style.backgroundImage="url('img/trumpR.png')";
        }
        if (trumpPos.bottom>=window.innerHeight) direcY=-5
        if (trumpPos.top<=0) direcY=5

    }
}


function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }

function inicializa(){
    document.body.addEventListener("keydown",mueve);
    mueveTrump();
}

window.onload=inicializa;