/* 
Tabla de multiplicar del 0 al 10
 */

//Se puede acceder a la variable desde cualquier función
var global;

function iniciar(){
    //Agregar escuchador para el botón
    var boton1 = document.getElementById('btnGenerar');
    boton1.addEventListener("click", generarTabla);
}

function generarTabla(){
    //Leer número y validarlo
    numero1 = document.getElementById('inpNum').value; //Si no se pone el var es como si se declarara fuera de la función
    if(isNaN(numero1)){ //isNaN = si no es un número
        numero1 = 0;
    }
    var cadena = "";
    //Ciclo para llenar la tabla con el número capturado
    for(var i = 0; i <= 10; i++){
        cadena = cadena + i + " X " + numero1 + " = " + (i * numero1);
        cadena = cadena + "\n";
    }
    //Se accesa al área de texto del documento
    var txtArea1 = document.getElementById('txtArea');
    //Se agrega el contenido de la cadena utilizando la propiedad value
    txtArea1.value = cadena;
}

window.addEventListener("load", iniciar);
