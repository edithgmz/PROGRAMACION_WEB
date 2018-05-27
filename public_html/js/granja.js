/* 
Manipular audio utilizando imágenes como botones
 */

function sonidoGranja(animal){
    var audioElemento = document.createElement('audio'); //Se utiliza para crear un elemento no existente en el .html
    var rutaAudio = "../audios/" + animal + ".mp3";
    
    audioElemento.setAttribute('src', rutaAudio);
    audioElemento.play();
}
