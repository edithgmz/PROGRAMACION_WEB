/*
 Archivo js con las funciones para la página ejemplo6.html
 */

function hacerClic() {
    var lista = document.querySelectorAll("#principal p");
    for(var f = 0; f < lista.length; f++){
        lista[f].onclick = mostrarAlerta;
    }
}

function mostrarAlerta() {
    alert('¡Hizo clic!');
}

window.onload = hacerClic;
