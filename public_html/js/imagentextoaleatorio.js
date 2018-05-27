/* 
Imagen y texto aleatorios al cargar o actualizar la página
 */

function cargar(){
    //Generar un número aleatorio entero entre 0 y 3
    var num = Math.round(Math.random()*3);
    var num1 = Math.round(Math.random()*3);
    //Muestra un alert con los números utilizados para la imagen y el texto: alert("Imagen: " + num + "\nTexto: " + num1);
    //Arreglo que contendrá las rutas de las imágenes
    var imagenes = new Array(4);
    imagenes[0] = "../imagenes/shio_1.jpg";
    imagenes[1] = "../imagenes/shio_2.jpg";
    imagenes[2] = "../imagenes/shio_3.jpg";
    imagenes[3] = "../imagenes/shio_4.jpg";
    //Acceder a la imagen del documento
    var imagen1 = document.getElementById('imgAleatoria');
    //Modificar la imagen
    imagen1.src = imagenes[num];
    //Arreglo que contendrá los textos
    var textos = new Array(4);
    textos[0] = "Piedra Filosofal";
    textos[1] = "Cámara Secreta";
    textos[2] = "Prisionero de Azkaban";
    textos[3] = "Caliz de fuego";
    //Acceder al texto del documento
    var texto1 = document.getElementById('txtAleatorio');
    //Modificar el texto
    texto1.innerHTML = textos[num1];
}

window.addEventListener("load", cargar);
