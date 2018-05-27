/* 
 Instituto Tecnológico de Chihuahua II
 Carrera: Ingeniería en Sistemas Computacionales
 Materia: Programación Web
 
 Aluma: Priscila Edith Gómez Rascón
 Número de Control: 15551384
 
 Archivo JS que contiene el manejo de las cadenas
 mostradas en la página cadenas.html
 */

//Variables globales
var cadena1, cadena2, cadena3, cadena4, cadena5;

//Función principal que invoca al resto
function iniciar() {
    simpleDoble();
    comillas();
    backSlash();
    tamanio();
    intBackSlash();
    ubica();
    buscar();
    cambiar();
    mayuscula();
    minuscula();
    secuencia();
}

//Funciones para mostrar el primer elemento de un arreglo de cadenas
function mostrarSec(){
    var arreglo = cadena5.split("-");
    var pArr1 = document.getElementById('pArr');
    pArr1.innerHTML = arreglo[0];
}
function secuencia(){
    cadena5 = "AB-CD-EF-GH-IJ-KL-MN-ÑO-PQ-RS-TU-VW-XYZ";
    var pAlf1 = document.getElementById('pAlf');
    pAlf1.innerHTML = cadena5;
    var btnArr1 = document.getElementById('btnArr');
    btnArr1.addEventListener("click", mostrarSec);
}

//Funciones para convertir una cadena a minúsculas
function hacerMinuscula(){
    var pMinu1 = document.getElementById('pMinu');
    pMinu1.innerHTML = cadena4.toLowerCase();
}
function minuscula(){
    cadena4 = document.getElementById('pMinu').innerHTML;
    var btnMinus1 = document.getElementById('btnMinus');
    btnMinus1.addEventListener("click", hacerMinuscula);
}

//Funciones para convertir una cadena a mayúsculas
function hacerMayuscula(){
    var pMayu1 = document.getElementById('pMayu');
    pMayu1.innerHTML = cadena3.toUpperCase();
}
function mayuscula(){
    cadena3 = document.getElementById('pMayu').innerHTML;
    var btnMayus1 = document.getElementById('btnMayus');
    btnMayus1.addEventListener("click", hacerMayuscula);
}

//Funciones para cambiar una palabra de una cadena o párrafo por otra definida
function cambio(){
    var cambia = cadena2.replace("disidentes", "detractores");
    var pCambio1 = document.getElementById('pCambio');
    pCambio1.innerHTML = cambia;
}
function cambiar() {
    cadena2 = document.getElementById('pCambio').innerHTML;
    var btnCambia1 = document.getElementById('btnCambia');
    btnCambia1.addEventListener("click", cambio);
}

//Funciones para realizar una búsqueda global en una cadena o párrafo
function busqueda() {
    var busca = cadena1.match(/al/g);
    var pBus1 = document.getElementById('pBus');
    pBus1.innerHTML = busca;
}
function buscar() {
    cadena1 = "En el siglo XXV, la humanidad ha alcanzado la inmortalidad gracias al agua viva,\n\
                    el agua vital que se reparte de manera gratuita entre la población de la Europa Unida." + "<br>" +
                   "La muerte ya no existe, pero la superpoblación ha convertido en limitados algunos recursos,\n\
                    como el aire y el espacio.";
    var pCad1 = document.getElementById('pCad');
    pCad1.innerHTML = cadena1;
    var btnBusq1 = document.getElementById('btnBusq');
    btnBusq1.addEventListener("click", busqueda);
}

//Función que muestra la ubicación de una palabra en una cadena
function ubica() {
    var cadena = "Ubicar donde se encuentra la palabra 'azul' en esta cadena.";
    var posicion = cadena.indexOf("azul");
    var pIndex1 = document.getElementById('pIndex');
    pIndex1.innerHTML = "Cadena: " + cadena + "<br>" + "Ubicación: " + posicion;
}

//Función que muestra el tamaño de la cadena asignada
function tamanio() {
    var cadena = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    var pTam1 = document.getElementById('pTam');
    pTam1.innerHTML = "Cadena: " + cadena + "<br>" + "Tamaño: " + cadena.length;
}

//Función en la que se muestra como la diagonal inversa puede truncar una cadena pero no código
function intBackSlash() {
    var pIntI1 = document.getElementById('pIntI');
    pIntI1.innerHTML = "Hola \ Mundo.";
    var pIntII1 = document.getElementById('pIntII');
    //pIntII1.innerHTML = \ "Hola Mundo.";  //--> Genera error en la ejecución
}

//Función en la que se muestra el uso de la diagonal invertida para mostrar comillas en las cadenas
function backSlash() {
    var resp1 = "¿Eres \'humano\'...?";
    var resp2 = "No, soy un \"yokai\".";
    var pBaSla1 = document.getElementById('pBaSla');
    pBaSla1.innerHTML = resp1 + "<br>" + resp2;
}

//Función para imprimir 3 cadenas mostrando comillas, simples y dobles, dentro de la cadena
function comillas() {
    var resp1 = "¿Cuál es su nombre?";
    var resp2 = "Su nombre es 'William'.";
    var resp3 = 'Su nombre es "William".';
    var pComi1 = document.getElementById('pComi');
    pComi1.innerHTML = resp1 + "<br>" + resp2 + "<br>" + resp3;
}

//Función para imprimir dos cadenas, una utilizando comillas simples y la otra utilizando comillas dobles
function simpleDoble() {
    var cad1 = "Fahrenheit 451";
    var cad2 = 'Fahrenheit 451';
    var pSimple1 = document.getElementById('pSimple');
    pSimple1.innerHTML = pSimple1.innerHTML + "<br>" + cad1;
    var pDoble1 = document.getElementById('pDoble');
    pDoble1.innerHTML = pDoble1.innerHTML + "<br>" + cad2;
}

window.addEventListener("load", iniciar);
