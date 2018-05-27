/* 
Instituto Tecnológico de Chihuahua II
Carrera: Ingeniería en Sistemas Computacionales
Materia: Programación Web

Aluma: Priscila Edith Gómez Rascón
Número de Control: 15551384

Archivo JS que contiene los arreglos mostrados en
la página arreglosseleccionar.html y los métodos para eliminar
 */

function iniciar(){
    //Arreglos
    arr1 = ["Samuel", "Alfredo", "Dai", "Akemi", "Frank", "William", "Ronnie", "Askar"];
    arr2 = ["Mascotas", "Animales"];
    arr3 = ["Gato", "Perro", "Hamster", "Erizo"];
    arr4 = ["Elefante", "Zorro", "Comadreja", "León", "Puma", "Águila", "Liebre"];
    
    //Dos arreglos concatenados (método concat)
    var concat1 = arr2.concat(arr3);
    var divArrConD1 = document.getElementById('divArrConD');
    divArrConD1.innerHTML = concat1;
    
    //Tres arreglos concatenados (método concat)
    var concat2 = arr2.concat(arr3, arr4);
    var divArrConT1 = document.getElementById('divArrConT');
    divArrConT1.innerHTML = concat2;
    
    //Arreglo con sus elementos unidos, utilizando como separador el símbolo "-" (método join)
    var divArrJo1 = document.getElementById('divArrJo');
    divArrJo1.innerHTML = arr1.join(" - ");
    
    //Arreglo con sus elementos unidos, utilizando como separador el símbolo "-" (método toString)
    var divArrStr1 = document.getElementById('divArrStr');
    divArrStr1.innerHTML = arr1.toString();
    
    //Se seleccionan los elementos entre las posiciones 1 y 5 del arreglo 4 (método slice)
    var carnivoros = arr4.slice(1, 5);
    var divArrSlice1 = document.getElementById('divArrSlice');
    divArrSlice1.innerHTML = carnivoros;
}

window.addEventListener("load", iniciar);
