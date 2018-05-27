/*
 Archivo js con las funciones para la página ejemplo4.html
 */

function hacerClic() {
    document.querySelector("#principal p:first-child").onclick = mostrarAlerta;
}

function mostrarAlerta() {
    alert('¡Hizo clic!');
}

window.onload = hacerClic;
