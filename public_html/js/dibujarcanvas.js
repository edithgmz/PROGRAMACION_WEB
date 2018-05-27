/* 
Dibujar figura seleccionada en el canvas
 */

function iniciar(){
    var btnDibujar1 = document.getElementById('btnDibujar');
    btnDibujar1.addEventListener('click', dibujar);
}

function dibujar(){
    //Acceder al canvas
    var miCanvas1 = document.getElementById('miCanvas');
    var contexto = miCanvas1.getContext('2d');
    //Limpiar canvas
    contexto.clearRect(0, 0, 400, 300);
    //Obtener figura a dibujar y color
    var figuraDibujar1 = document.getElementById('selectFigura').value;
    //alert("Dibujar: " + figuraDibujar1);
    var colorFigura1 = document.getElementById('colorFigura').value;
    //alert("Color: " + colorFigura1);
    //Distinguir y dibujar cada figura
    if(figuraDibujar1 === "rectangulo"){
        //Pedir dimensiones
        var ancho = prompt("Ancho: ", 0); //Como un alert pero para obtener valores del usuario
        var alto = prompt("Alto: ", 0);
        contexto.fillRect(20, 20, ancho, alto);
    }
    if(figuraDibujar1 === "circulo"){
        //Pedir radio
        var radio = prompt("Radio: ", 0);
        contexto.beginPath();
        contexto.arc(200, 150, radio, 0, Math.PI*2, true);
        contexto.fill();
    }
    if(figuraDibujar1 === "triangulo"){
        //Pedir dimensiones
        //var radio = prompt("Radio: ", 0);
        contexto.beginPath();
        contexto.moveTo(100, 100);
        contexto.lineTo(200, 200);
        contexto.lineTo(100, 200);
        contexto.fill();
    }
}

window.addEventListener('load', iniciar)
