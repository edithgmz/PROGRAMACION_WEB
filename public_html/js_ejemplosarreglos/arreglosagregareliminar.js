/* 
Instituto Tecnológico de Chihuahua II
Carrera: Ingeniería en Sistemas Computacionales
Materia: Programación Web

Aluma: Priscila Edith Gómez Rascón
Número de Control: 15551384

Archivo JS que contiene los arreglos y los métodos para eliminar
mostrados en la página arreglosagregareliminar.html
 */

function iniciar(){
    //Arreglos
    arr1 = ["Samuel", "Alfredo", "Dai", "Akemi", "Frank", "William", "Ronnie", "Askar"];
    arr3 = ["Gato", "Perro", "Hamster", "Erizo"];
    arr4 = ["Elefante", "Zorro", "Comadreja", "León", "Puma", "Águila", "Liebre"];
    
    //Se agregan elementos al final de un arreglo (método push)
    divArrPush1 = document.getElementById('divArrPush');
    divArrPush1.innerHTML = arr4;
    var btnAgrega1 = document.getElementById('btnAgrega');
    btnAgrega1.addEventListener("click", agregar);
    
    //Se elimina el último elemento de un arreglo (método pop)
    divArrPop1 = document.getElementById('divArrPop');
    divArrPop1.innerHTML = arr4;
    var btnElimina1 = document.getElementById('btnElimina');
    btnElimina1.addEventListener("click", eliminar);
    
    //Se agregan elementos al final de un arreglo (método splice)
    divArrSplice1 = document.getElementById('divArrSplice');
    divArrSplice1.innerHTML = arr3;
    var btnAgregaSeg1 = document.getElementById('btnAgregaSeg');
    btnAgregaSeg1.addEventListener("click", agregarSegPos);
    
    //Se agrega un elemento en la primera posición de un arreglo (método unshift)
    divArrUnshift1 = document.getElementById('divArrUnshift');
    divArrUnshift1.innerHTML = arr1;
    var btnAñadePrim1 = document.getElementById('btnAñadePrim');
    btnAñadePrim1.addEventListener("click", añadirPrimero);
    
    //Se elimina el primer elemento de un arreglo y se "mueve" el resto de elementos a la izquierda (método shift)
    divArrShift1 = document.getElementById('divArrShift');
    divArrShift1.innerHTML = arr1;
    var btnEliminaPrim1 = document.getElementById('btnEliminaPrim');
    btnEliminaPrim1.addEventListener("click", eliminarPrimero);
}

//Función para eliminar el primer elemento de un arreglo
function eliminarPrimero(){
    arr1.shift();
    divArrShift1 = document.getElementById('divArrShift');
    divArrShift1.innerHTML = arr1;
}

//Función para añadir un elemento en la primera posición de un arreglo
function añadirPrimero(){
    arr1.unshift("Sebastián");
    divArrUnshift1.innerHTML = arr1;
}

//Función para agregar un elemento en la posición 2 de un arreglo
function agregarSegPos(){
    arr3.splice(2, 0, "Conejo")
    divArrSplice1 = document.getElementById('divArrSplice');
    divArrSplice1.innerHTML = arr3;
}

//Función para eliminar el último elemento de un arreglo
function eliminar(){
    arr4.pop();
    divArrPop1 = document.getElementById('divArrPop');
    divArrPop1.innerHTML = arr4;
}

//Función para agregar un elemento en la última posición de un arreglo
function agregar(){
    arr4.push("Tigre");
    divArrPush1 = document.getElementById('divArrPush');
    divArrPush1.innerHTML = arr4;
}

window.addEventListener("load", iniciar);
