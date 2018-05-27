/* 
Dibujar una figura en el canvas
 */

function dibujar(){
    var miCanvas1 = document.getElementById('miCanvas');
    //Definir el contexto para trabajar en Canvas
    var contexto = miCanvas1.getContext('2d');
    //Definir color de trazos
    contexto.fillStyle = '#FF0000';
    //Dibujar un rectángulo
    contexto.fillRect(0, 0, 80, 100);
}

window.addEventListener("load", dibujar);
