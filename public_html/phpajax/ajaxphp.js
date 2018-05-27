/*
 Instituto Tecnológico de Chihuahua II
 Carrera: Ingeniería en Sistemas Computacionales
 Materia: Programación Web
 
 Aluma: Priscila Edith Gómez Rascón
 Número de Control: 15551384
 */

function mostrarPista(txt) {
    if (txt.length === 0) {
        document.getElementById("txtPista").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("txtPista").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "ajaxphp.php?q=" + txt, true);
        xmlhttp.send();
    }
}
