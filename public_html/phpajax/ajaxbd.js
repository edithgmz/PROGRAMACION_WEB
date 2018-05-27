/*
 Instituto Tecnológico de Chihuahua II
 Carrera: Ingeniería en Sistemas Computacionales
 Materia: Programación Web
 
 Aluma: Priscila Edith Gómez Rascón
 Número de Control: 15551384
 */

function mostrarPersona(txt) {
    if (txt === "") {
        document.getElementById("txtPista").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("txtPista").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "ajaxbd.php?q=" + txt, true);
        xmlhttp.send();
    }
}
