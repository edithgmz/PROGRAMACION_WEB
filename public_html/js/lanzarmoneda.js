/* 
Simula lanzamiento de una moneda
Agregar: redondeo de porcentaje, alinear a la gráfica
 */
var sellos = 0;
var aguilas = 0;

function lanzarMoneda(){
    //Acceder a la imagen
    var imagen1 = document.getElementById('moneda');
    //Generar número aleatorio con dos opciones con la misma probabilidad
    var numero = Math.random();
    if(numero < 0.5){
        //alert("Sello");
        //Actualizar imagen
        imagen1.src = "../imagenes/sello.png";
        sellos++;
    } else{
        //alert("Águila");
        //Actualizar imagen
        imagen1.src = "../imagenes/aguila.png";
        aguilas++;
    }
    actualizarEstadisticas();
}

function actualizarEstadisticas(){
    //Acceder a etiquetas "section" de "Estadísticas"
    var seccSellos1 = document.getElementById('seccSellos');
    var seccAguilas1 = document.getElementById('seccAguilas');
    var seccTotales1 = document.getElementById('seccTotales');
    //Modificar estadísticas
    seccSellos1.innerHTML = "Sellos: " + sellos;
    seccAguilas1.innerHTML = "Aguilas: " + aguilas;
    seccTotales1.innerHTML = "Total: " + (sellos+aguilas);
    //Obtener porcentajes
    var sellosPorcentaje = (sellos*100)/(sellos+aguilas);
    var aguilasPorcentaje = (aguilas*100)/(sellos+aguilas);
    //Actualizar gráficas
    var rangoSellos1 = document.getElementById('rangoSellos');
    var rangoAguilas1 = document.getElementById('rangoAguilas');
    rangoSellos1.value = sellosPorcentaje;
    rangoAguilas1.value = aguilasPorcentaje;
    //Actualizar porcentajes
    //Acceder a los elementos HTML de porcentaje
    var divSellos1 = document.getElementById('divSellos');
    var divAguilas1 = document.getElementById('divAguilas');
    divSellos1.innerHTML = sellosPorcentaje + "  %";
    divAguilas1.innerHTML = aguilasPorcentaje + "  %";
}
