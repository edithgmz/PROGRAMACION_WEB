/* 
Almacenamiento de datos, como datos de sesión
 */

function iniciar(){
    //Agregar escuchador para evento clic del botón
    var btnGuardar1 = document.getElementById("btnGuardar");
    btnGuardar1.addEventListener("click", guardarSesion);
}

function guardarSesion(){
    var nombrevar1;
    var valorvar1;
    nombrevar1 = document.getElementById("nombrevar").value;
    valorvar1 = document.getElementById("valorvar").value;
    //alert("Nombre: " + nombrevar1 + "    Valor: " + valorvar1);
    //API para almacenamiento de datos de sesión; primero va el nombre de la variable y luego el valor
    sessionStorage.setItem(nombrevar1, valorvar1);
}

window.addEventListener("load", iniciar);
