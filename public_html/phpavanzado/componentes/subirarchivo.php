<?php

/*
 * Instituto Tecnológico de Chihuahua II
 * Carrera: Ingeniería en Sistemas Computacionales
 * Materia: Programación Web
 * 
 * Aluma: Priscila Edith Gómez Rascón
 * Número de Control: 15551384
 */

$dir_objetivo = "../cargas/";
$archivo_objetivo = $dir_objetivo . basename($_FILES["subirArchivo"]["name"]);
$subidaOk = 1;
$tipoArchivoImg = strtolower(pathinfo($archivo_objetivo, PATHINFO_EXTENSION));

if (isset($_POST["subir"])) {
    $verificar = getimagesize($_FILES["subirArchivo"]["tmp_name"]);
    if ($verificar !== false) {
        echo "El archivo es una imagen - " . $verificar["mime"] . ".";
        echo "<br>";
        $subidaOk = 1;
    } else {
        echo "El archivo no es una imagen.";
        echo "<br>";
        $subidaOk = 0;
    }
    if (file_exists($archivo_objetivo)) {
        echo "El archivo ya existe.";
        echo "<br>";
        $subidaOk = 0;
    }
    if ($_FILES["subirArchivo"]["size"] > 500000) {
        echo "El archivo es demasiado grande.";
        echo "<br>";
        $subidaOk = 0;
    }
    if ($tipoArchivoImg != "jpg" && $tipoArchivoImg != "png" && $tipoArchivoImg != "jpeg" && $tipoArchivoImg != "gif") {
        echo "Solo archivos JPG, JPEG, PNG y GIF son permitidos.";
        echo "<br>";
        $subidaOk = 0;
    }
    if ($subidaOk == 0) {
        echo "El archivo no ha podido subirse.";
        echo "<br>";
    } else {
        if (move_uploaded_file($_FILES["subirArchivo"]["tmp_name"], $archivo_objetivo)) {
            echo "El archivo " . basename($_FILES["subirArchivo"]["name"]) . " se ha subido.";
            echo "<br>";
        } else {
            echo "Ha habido un error al subir el archivo.";
            echo "<br>";
        }
    }
    echo "<br>";
    echo "<a href='../phparchivos.php'>Regresar</a>.";
}
