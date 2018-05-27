/* 
saludo.js
Se muestra un saludo personalizado
 */

//Forma recomendada del manejo de eventos
function iniciar(){
    //Acceder al elemento botón
    var boton1 = document.getElementById('btnMensaje'); //Accede al código html
    //Agregar un escuchador para cuando ocurra el evento 'clic' en este botón
    boton1.addEventListener("click", saludar);
}

function saludar(){
    //Acceder al elemento input, se utiliza la propiedad value para obtener el dato capturado en el objeto
    var nombre1 = document.getElementById('txtNombre').value;
    //Muestra un alert con el valor obtenido en la variable: alert("Nombre: " + nombre1);
    //Mostrar mensaje de saludo en la página
    var mensaje1 = document.getElementById('mensaje');
    //Asignar contenido interno de formato html al objeto
    mensaje1.innerHTML = "Hola " + nombre1 + ", bienvenido a la programación JS";
}

function saludar2(){
    //El prompt se utiliza para recuperar datos durante la ejecución
    var nombre2 = prompt("Nombre:", "Nombre"); //Primer valor: nombre de la ventana, segundo valor: texto de ejemplo
    alert("Hola, bienvenido: " + nombre2);
}

window.addEventListener("load", iniciar); //Accede a la ventana del navegador, cuando se carga la página
