/* 
Muestra un reloj digital

Agregar: nombre día de la semana, número de día, mes y año
                formato am/pm en la hora
 */

function reloj(){
    var tiempo = new Date();
    
    var hr = tiempo.getHours();
    var min = tiempo.getMinutes();
    var seg = tiempo.getSeconds();
    
    //Validar formato de dos dígitos para hora, minutos y segundos
    if(hr < 10){
        hr = '0' + hr;
    }
    if(min < 10){
        min = '0' + min;
    }
    if(seg < 10){
        seg = '0' + seg;
    }
    
    var horaTexto = "Hora: " + hr + ":" + min + ":" + seg;
    
    var seccion1 = document.getElementById('seccionreloj');
    seccion1.innerHTML = horaTexto;
    
    //setTimeout manda llamar una función en los milisegundos indicados
    var repetir = setTimeout('reloj()', '1000');
}

window.addEventListener('load', reloj);
