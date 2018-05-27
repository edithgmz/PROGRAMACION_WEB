/* 
 Instituto Tecnológico de Chihuahua II
 Carrera: Ingeniería en Sistemas Computacionales
 Materia: Programación Web
 
 Aluma: Priscila Edith Gómez Rascón
 Número de Control: 15551384
 
 Archivo JS que contiene los arreglos y los métodos para ordenar
 mostrados en la página arreglosordenar.html
 */

function iniciar() {
    //Arreglos
    arr1 = ["Samuel", "Alfredo", "Dai", "Akemi", "Frank", "William", "Ronnie", "Askar"];
    arr5 = [40, 100, 1, 5, 25, 10, 44, 8, 20, 150];
    arr6 =
            [
                {type: "Volvo", year: 2016},
                {type: "Saab", year: 2001},
                {type: "BMW", year: 2010},
                {type: "Audi", year: 2017}
            ];

    //Los elementos de un arreglo se ordenan inversamente (método reverse)
    divArrRev1 = document.getElementById('divArrRev');
    divArrRev1.innerHTML = arr1;
    var btnInverso1 = document.getElementById('btnInverso');
    btnInverso1.addEventListener("click", ordenaInverso);

    //Los elementos de un arreglo se ordenan alfabética y ascendentemente (método sort)
    divArrSortI1 = document.getElementById('divArrSortI');
    divArrSortI1.innerHTML = arr1;
    var btnAlfaAsc1 = document.getElementById('btnAlfaAsc');
    btnAlfaAsc1.addEventListener("click", ordenaAlfabetoAsc);

    //Los elementos de un arreglo se ordenan numérica y ascendentemente (método sort)
    divArrSortII1 = document.getElementById('divArrSortII');
    divArrSortII1.innerHTML = arr5;
    var btnNumAsc1 = document.getElementById('btnNumAsc');
    btnNumAsc1.addEventListener("click", ordenaNumeroAsc);

    //Los elementos de un arreglo se ordenan numérica y descendentemente (método sort)
    divArrSortIII1 = document.getElementById('divArrSortIII');
    divArrSortIII1.innerHTML = arr5;
    var btnNumDes1 = document.getElementById('btnNumDes');
    btnNumDes1.addEventListener("click", ordenaNumeroDes);

    //Los elementos de un arreglo se ordenan numérica y descendentemente (método sort)
    divArrSortIV1 = document.getElementById('divArrSortIV');
    divArrSortIV1.innerHTML = arr5;
    var btnAlfaNum1 = document.getElementById('btnAlfaNum');
    btnAlfaNum1.addEventListener("click", ordenaAlfabetoNum);
    var btnNumAlfa1 = document.getElementById('btnNumAlfa');
    btnNumAlfa1.addEventListener("click", ordenaNumeroAlfa);

    //Los elementos de un arreglo se ordenan aleatoriamente (método sort)
    divArrSortV1 = document.getElementById('divArrSortV');
    divArrSortV1.innerHTML = arr5;
    var btnRandom1 = document.getElementById('btnRandom');
    btnRandom1.addEventListener("click", ordenaAleatorio);

    //Los elementos de un arreglo se ordenan según su propiedad numérica (método sort)
    divArrSortVI1 = document.getElementById('divArrSortVI');
    muestraAutos1();
    var btnNumProp1 = document.getElementById('btnNumProp');
    btnNumProp1.addEventListener("click", ordenaNumProp);

    //Los elementos de un arreglo se ordenan según su propiedad string (método sort)
    divArrSortVII1 = document.getElementById('divArrSortVII');
    muestraAutos2();
    var btnTxtProp1 = document.getElementById('btnTxtProp');
    btnTxtProp1.addEventListener("click", ordenaTxtProp);
}

//Función para ordenar los valores de un arreglo según su propiedad string
function ordenaTxtProp() {
    arr6.sort(function (a, b) {
        var x = a.type.toLowerCase();
        var y = b.type.toLowerCase();
        if(x < y)
            return -1;
        if(x > y)
            return 1;
        return 0;
    });
    muestraAutos2();
}

//Función para mostrar el contenido del arreglo 6
function muestraAutos2() {
    divArrSortVII1.innerHTML =
            arr6[0].type + " " + arr6[0].year + "<br>" +
            arr6[1].type + " " + arr6[1].year + "<br>" +
            arr6[2].type + " " + arr6[2].year + "<br>" +
            arr6[3].type + " " + arr6[3].year;
}

//Función para ordenar los valores de un arreglo según su propiedad numérica
function ordenaNumProp() {
    arr6.sort(function (a, b) {
        return a.year - b.year;
    });
    muestraAutos1();
}

//Función para mostrar el contenido del arreglo 6
function muestraAutos1() {
    divArrSortVI1.innerHTML =
            arr6[0].type + " " + arr6[0].year + "<br>" +
            arr6[1].type + " " + arr6[1].year + "<br>" +
            arr6[2].type + " " + arr6[2].year + "<br>" +
            arr6[3].type + " " + arr6[3].year;
}

//Función para ordenar un arreglo de números aleatoriamente
function ordenaAleatorio() {
    arr5.sort(function (a, b) {
        return 0.5 - Math.random();
    });
    divArrSortV1.innerHTML = arr5;
}

//Función para ordenar un arreglo de números afabéticamente
function ordenaAlfabetoNum() {
    arr5.sort();
    divArrSortIV1.innerHTML = arr5;
}

//Función para ordenar un arreglo de números ascendentemente
function ordenaNumeroAlfa() {
    arr5.sort(function (a, b) {
        return a - b;
    });
    divArrSortIV1.innerHTML = arr5;
}

//Función para ordenar un arreglo de números descendentemente
function ordenaNumeroDes() {
    arr5.sort(function (a, b) {
        return b - a;
    });
    divArrSortIII1.innerHTML = arr5;
}

//Función para ordenar un arreglo de números ascendentemente
function ordenaNumeroAsc() {
    arr5.sort(function (a, b) {
        return a - b;
    });
    divArrSortII1.innerHTML = arr5;
}

//Función para ordenar un arreglo alfabéticamente
function ordenaAlfabetoAsc() {
    arr1.sort();
    divArrSortI1.innerHTML = arr1;
}

//Función para ordenar un arreglo inversamente
function ordenaInverso() {
    arr1.reverse();
    divArrRev1.innerHTML = arr1;
}

window.addEventListener("load", iniciar);
