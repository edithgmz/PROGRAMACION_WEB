/*
 Archivo js con las funciones para la página ejemplo7.html
 */

function hacerClic() {
    var lista = document.getElementById('principal').querySelectorAll("p");
    lista[0].onclick = mostrarAlerta;
}

function mostrarAlerta() {
    alert('¡Hizo clic!');
}

window.onload = hacerClic;
