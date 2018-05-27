/* 
 Instituto Tecnológico de Chihuahua II
 Carrera: Ingeniería en Sistemas Computacionales
 Materia: Programación Web
 
 Aluma: Priscila Edith Gómez Rascón
 Número de Control: 15551384
 
 Archivo JS que contiene los ejercicios con números
 mostrados en la página numeros.html
 */

//Función principal que invoca al resto
function iniciar(){
    numDecimSinDecim();
    numExLargeExSmall();
    numPresicion();
    numFlotante();
    numHexadecimal();
    numNAN();
    numInifinito();
    numSistemas();
}

//Función para mostrar números en diferentes bases utilizando el método toString()
function numSistemas(){
    var num = 801;
    var pSistNum1 = document.getElementById('pSistNum');
    pSistNum1.innerHTML = pSistNum1.innerHTML + "Decimal: " + num + "<br>" + "Hexadecimal: " + num.toString(16) +
            "<br>" + "Octal: " + num.toString(8) + "<br>" + "Binario: " + num.toString(2);
}

//Función para mostrar una serie de números hasta llegar a infinito
function numInifinito(){
    var num = 2;
    var cad = "";
    var pInfinito1 = document.getElementById('pInfinito');
    while(num != Infinity){
        num = num * num;
        cad = cad + num + "<br>";
    }
    pInfinito1.innerHTML = pInfinito1.innerHTML + cad;
}

//Función para mostrar un número dividido por una cadena no-numérica
function numNAN(){
    var num = 801;
    var cad = "Número";
    var div = num / cad;
    var pNAN1 = document.getElementById('pNAN');
    pNAN1.innerHTML = pNAN1.innerHTML + "<br>" + num + " + " + cad + " = " + div;
}

//Función para mostrar un número hexadecimal
function numHexadecimal(){
    var num = 0xFF;
    var pHex1 = document.getElementById('pHex');
    pHex1.innerHTML = pHex1.innerHTML + "<br>" + "0xFF = " + num;
}

//Función para mostrar dos operaciones usando dos números con punto flotante y demostrando su presición
function numFlotante(){
    var num1 = 0.2;
    var num2 = 0.1;
    var op1 = num1 + num2;
    var op2 = ((0.2*10) + (0.1 * 10)) / 10;
    var pFloatNumI1 = document.getElementById('pFloatNumI');
    pFloatNumI1.innerHTML = pFloatNumI1.innerHTML + "<br>" + num1 + " + " + num2 + " = " + op1;
    var pFloatNumII1 = document.getElementById('pFloatNumII');
    pFloatNumII1.innerHTML = pFloatNumII1.innerHTML + "<br>" + num1 + " + " + num2 + " = " + op2;
}

//Función para mostrar dos números, desmostrando la presición
function numPresicion(){
    var num1 = 999999999999999;
    var num2 = 9999999999999999;
    var pNumI1 = document.getElementById('pNumI');
    pNumI1.innerHTML = pNumI1.innerHTML + "<br>" + num1;
    var pNumII1 = document.getElementById('pNumII');
    pNumII1.innerHTML = pNumII1.innerHTML + "<br>" + num2;
}

//Función para mostrar un número muy grande y un número muy pequeño escritos con notación científica
function numExLargeExSmall(){
    var num1 = 801e8;
    var num2 = 801e-8;
    var pExLarge1 = document.getElementById('pExLarge');
    pExLarge1.innerHTML = pExLarge1.innerHTML + "<br>" + num1;
    var pExSmall1 = document.getElementById('pExSmall');
    pExSmall1.innerHTML = pExSmall1.innerHTML + "<br>" + num2;
}

//Función para imprimir dos números, uno con decimales y el otro sin decimales
function numDecimSinDecim() {
    var num1 = 801.44;
    var num2 = 801;
    var pDecimal1 = document.getElementById('pDecimal');
    pDecimal1.innerHTML = pDecimal1.innerHTML + "<br>" + num1;
    var pNoDecimal1 = document.getElementById('pNoDecimal');
    pNoDecimal1.innerHTML = pNoDecimal1.innerHTML + "<br>" + num2;
}

window.addEventListener("load", iniciar);
