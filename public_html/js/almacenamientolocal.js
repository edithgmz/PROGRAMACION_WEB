/* 
Almacenamiento de datos, como datos locales
 */

function iniciar(){
    var btnGuardar1 = document.getElementById("btnGuardar");
    btnGuardar1.addEventListener("click", guardarLocal);
}

function guardarLocal(){
    var nombrevar1;
    var valorvar1;
    nombrevar1 = document.getElementById("nombrevar").value;
    valorvar1 = document.getElementById("valorvar").value;
    //alert("Nombre: " + nombrevar1 + "    Valor: " + valorvar1);
    //API para almacenamiento de datos locales; primero va el nombre de la variable y luego el valor
    localStorage.setItem(nombrevar1, valorvar1);
}

window.addEventListener("load", iniciar);
