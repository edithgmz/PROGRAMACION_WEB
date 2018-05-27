/*
 Archivo js con las funciones para la página ejemplo5.html
 */

function hacerClic() {
    var lista = document.querySelectorAll("#principal p");
    lista[0].onclick = mostrarAlerta;
}

function mostrarAlerta() {
    alert('¡Hizo clic!');
}

window.onload = hacerClic;
