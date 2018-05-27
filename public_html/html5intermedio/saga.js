/*
Instituto Tecnológico de Chihuahua II
Carrera: Ingeniería en Sistemas Computacionales
Materia: Programación Web

Aluma: Priscila Edith Gómez Rascón
Número de Control: 15551384

Script para la página: saga.html
*/

function iniciar(){
    var boton1 = document.getElementById('btnMensaje');
    boton1.addEventListener("click", mostrar);
}

function mostrar(){
    var mensaje1 = document.getElementById('msj');
    mensaje1.innerHTML = "Priscila Edith Gómez Rascón";
}

window.addEventListener("load", iniciar);
