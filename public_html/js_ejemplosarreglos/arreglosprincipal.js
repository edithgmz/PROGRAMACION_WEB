/* 
 Instituto Tecnológico de Chihuahua II
 Carrera: Ingeniería en Sistemas Computacionales
 Materia: Programación Web
 
 Aluma: Priscila Edith Gómez Rascón
 Número de Control: 15551384
 
 Archivo JS que contiene los arreglos mostrados en
 la página arreglosprincipal.html
 */

function iniciar() {
    //Arreglos
    arr1 = ["Samuel", "Alfredo", "Dai", "Akemi", "Frank", "William", "Ronnie", "Askar"];
    arr2 = ["Mascotas", "Animales"];
    arr3 = ["Gato", "Perro", "Hamster", "Erizo"];
    arr4 = ["Elefante", "Zorro", "Comadreja", "León", "Puma", "Águila", "Liebre"];
    arr5 = [40, 100, 1, 5, 25, 10, 44, 8, 20, 150];
    arr6 =
            [
                {type: "Volvo", year: 2016},
                {type: "Saab", year: 2001},
                {type: "BMW", year: 2010},
                {type: "Audi", year: 2017}
            ];

    //Mostrar los arreglos
    var divArrI1 = document.getElementById('divArrI');
    divArrI1.innerHTML = arr1;
    var divArrII1 = document.getElementById('divArrII');
    divArrII1.innerHTML = arr2;
    var divArrIII1 = document.getElementById('divArrIII');
    divArrIII1.innerHTML = arr3;
    var divArrIV1 = document.getElementById('divArrIV');
    divArrIV1.innerHTML = arr4;
    var divArrV1 = document.getElementById('divArrV');
    divArrV1.innerHTML = arr5;
    muestraAutos();
}

//Función para mostrar el contenido del arreglo 6
function muestraAutos(){
    var divArrVI1 = document.getElementById('divArrVI');
    divArrVI1.innerHTML = 
            arr6[0].type + " " + arr6[0].year + "," +
            arr6[1].type + " " + arr6[1].year + "," +
            arr6[2].type + " " + arr6[2].year + "," +
            arr6[3].type + " " + arr6[3].year;
}

window.addEventListener("load", iniciar);
