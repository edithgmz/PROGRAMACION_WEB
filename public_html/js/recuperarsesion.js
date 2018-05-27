/* 
Recuperar todos los datos de variables de sesión y mostrarlos en la página
 */

function iniciar(){
    var cadena = "";
    //Obtener la cantidad de variables
    var numero;
    numero = sessionStorage.length; //Recupera el tamaño del arreglo de datos
    for(var i = 0; i < numero; i++){
        var clave1 = sessionStorage.key(i); //Recupera el nombre de las keys
        var valor1 = sessionStorage.getItem(clave1); //Recupera el valor de la key
        cadena += clave1 + " --- " + valor1 + "<br>";
    }
    //Mostrar resultado
    var resultado = document.getElementById("cajaDatos");
    resultado.innerHTML = cadena;
}

window.addEventListener("load", iniciar);
