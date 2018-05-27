/* 
Recuperar todos los datos de variables locales y mostrarlos en la página
 */

function iniciar(){
    var cadena = "";
    var numero;
    numero = localStorage.length;
    for(var i = 0; i < numero; i++){
        var clave1 = localStorage.key(i);
        var valor1 = localStorage.getItem(clave1);
        cadena += clave1 + " --- " + valor1 + "<br>";
    }
    var resultado = document.getElementById("cajaDatos");
    resultado.innerHTML = cadena;
}

window.addEventListener("load", iniciar);

//El almacenamiento local permite guardar información de objetos
