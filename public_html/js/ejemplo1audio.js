/* 
Manipular un audio
 */
var audio1;

function subirVolumen(){
    audio1 = document.getElementById('miaudio');
    audio1.volume += 0.1;
}

function bajarVolumen(){
    audio1 = document.getElementById('miaudio');
    audio1.volume -= 0.1;
}

function velocidadCambiar(velocidad){
    audio1 = document.getElementById('miaudio');
    audio1.playbackRate = velocidad;
}
