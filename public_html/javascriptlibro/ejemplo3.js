/*
 Archivo js con las funciones para la página ejemplo3.html
 */

function hacerClic() {
    document.getElementsByTagName('p')[0].onclick = mostrarAlerta;
}

function mostrarAlerta() {
    alert('¡Hizo clic!');
}

window.onload = hacerClic;
