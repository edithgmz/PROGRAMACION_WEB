/* 
 Código JS para arrastrar y soltar una imagen
 */

function iniciar() {
    //Acceder a la imagen
    origen1 = document.getElementById('imagen');
    origen1.addEventListener('dragstart', arrastrar);
    destino1 = document.getElementById('cajasoltar');
    destino1.addEventListener('dragenter',
            function (e) { //Se implementa una función anónima en el escuchador
                e.preventDefault(); //Previene el comportamiento predeterminado del navegador
            });
    destino1.addEventListener('dragover',
            function (e) {
                e.preventDefault();
            });
    destino1.addEventListener('drop', soltar);
}

function arrastrar(e){
    var codigoimagen = '<img src="' + origen1.getAttribute('src') + '">';
    e.dataTransfer.setData('Text', codigoimagen);
}

function soltar(e){
    e.preventDefault();
    destino1.innerHTML = e.dataTransfer.getData('Text');
}

window.addEventListener('load', iniciar)
