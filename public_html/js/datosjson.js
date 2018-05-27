/* 
 Datos de granja en formato JSON
 */
var myObj;

function iniciar() {
    //El formato JSON permite almacenar todos los datos del servidor y mostrarlos dinámicamente al cliente
    myObj =
            [
                {
                    "nombrecomun": "gallo",
                    "nombrecientifico": "gallus domesticus",
                    "imagen": "gallo1.jpg",
                    "sonido": "gallo.mp3",
                    "comida": "gusanos, maíz, sorgo",
                    "descripcion": "ave familia gallinaceas"
                },
                {
                    "nombrecomun": "caballo",
                    "nombrecientifico": "equus caballus",
                    "imagen": "horse.jpg",
                    "sonido": "horse.mp3",
                    "comida": "alfalfa, pastos",
                    "descripcion": "mamífero equino"
                }
            ];
    mostrarDatosIniciales();
    //Agregar escuchadores
    var btnGuardar1 = document.getElementById('btnGuardar');
    btnGuardar1.addEventListener("click", guardarDatosLocales);
    var btnTabla1 = document.getElementById('btnTabla');
    btnTabla1.addEventListener("click", mostrarTabla);
    var btnBuscarM1 = document.getElementById('btnBuscarM'); //Mi botón
    btnBuscarM1.addEventListener("click", buscarAnimalM);
    var btnBuscar1 = document.getElementById('btnBuscar');
    btnBuscar1.addEventListener("click", buscarAnimal);
    var btnAgregar1 = document.getElementById('btnAgregar');
    btnAgregar1.addEventListener("click", agregarAnimal);
}

function mostrarDatosIniciales() {
    //Mostrar los datos contenidos en formato JSON
    var divAnimales1 = document.getElementById('divAnimales');
    myJSON = JSON.stringify(myObj); //Convierte el contenido del objeto JSON a string
    divAnimales1.innerHTML = myJSON;
}

function guardarDatosLocales() {
    //Guardar datos JSON en una variable local
    myJSON = JSON.stringify(myObj);
    localStorage.setItem("animalesGranja", myJSON);
}

function mostrarTabla() {
    var cadena = "";
    cadena = "<table>";
    //La variable i va a iterar en myObj
    for (i in myObj) {
        cadena = cadena + "<tr><td>";
        cadena = cadena + myObj[i].nombrecomun;
        cadena = cadena + "</td>";
        cadena = cadena + "<td>";
        cadena = cadena + myObj[i].descripcion;
        cadena = cadena + "</td>";
        cadena = cadena + "<td>";
        cadena = cadena + "<img src='../imagenes/" + myObj[i].imagen + "'>";
        cadena = cadena + "</td>";
        cadena = cadena + "<td>";
        cadena = cadena + "<audio controls><source src='../audios/" + myObj[i].sonido + "'></audio>";
        cadena = cadena + "</td></tr>";
    }
    cadena = cadena + "</table>";
    var divTabla1 = document.getElementById("divTabla");
    divTabla1.innerHTML = cadena;
}

function buscarAnimalM() {
    var valAnimal = document.getElementById('valAnimal').value;
    var encuentra = false;
    for (i in myObj) {
        if (myObj[i].nombrecomun === valAnimal) {
            encuentra = true;
            alert("Nombre Común: " + myObj[i].nombrecomun + "\n\nNombre Científico: "
                    + myObj[i].nombrecientifico + "\n\nDescripción: " + myObj[i].descripcion);
            return;
        }
    }
    if (encuentra === false) {
        alert("Animal no encontrado, por favor buscar otro.");
    }
}

function buscarAnimal() {
    var txtBuscar1 = document.getElementById('txtBuscar').value;
    var encontrado = false;
    var divBusqueda1 = document.getElementById('divBusqueda');
    for (i in myObj) {
        if (txtBuscar1 === myObj[i].nombrecomun) {
            encontrado = true;
            divBusqueda1.innerHTML = "Se encontró: " + txtBuscar1 +
                    " y su descripción es: " + myObj[i].descripcion;
            return; //Termina la función
        }
        /*Si se utiliza de esta manera la información se sobreescribe pero no se percibe dicha acción
         * else{divBusqueda1.innerHTML = "No se encontró: " + txtBuscar1;}*/
    }
    if (encontrado === false) {
        divBusqueda1.innerHTML = "No se encontró: " + txtBuscar1;
    }
}

function agregarAnimal() {
    var animalAgregar = "";
    //Leer datos de animal
    var nombrecomun1 = document.getElementById('txtNombreC').value;
    var descripcion1 = document.getElementById('txtDescrip').value;
    //TODO: Agregar los demás campos
    //Construir registro JSON
    animalAgregar +=
            '{"nombrecomun": "' + nombrecomun1 + '",' +
            '"nombrecientifico": "falta",' +
            '"imagen": "falta",' +
            '"sonido": "falta",' +
            '"comida": "falta",' +
            '"descripcion": "' + descripcion1 + '"}';
    //alert("Datos animal: " + animalAgregar);
    animalAgregar = JSON.parse(animalAgregar); //Convierte la variable a formato JSON
    myObj.push(animalAgregar); //Agrega la variable al objeto JSON
    //Actualizar almacenamiento local
    myJSON = JSON.stringify(myObj);
    localStorage.setItem("animalesGranja2", myJSON);
}

window.addEventListener("load", iniciar);
