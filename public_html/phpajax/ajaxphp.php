<?php

/*
 * Instituto Tecnológico de Chihuahua II
 * Carrera: Ingeniería en Sistemas Computacionales
 * Materia: Programación Web
 * 
 * Aluma: Priscila Edith Gómez Rascón
 * Número de Control: 15551384
 */

$a[] = "Anna";
$a[] = "María";
$a[] = "Carlos";
$a[] = "Diana";
$a[] = "Edith";
$a[] = "Fiona";
$a[] = "Gabriel";
$a[] = "Héctor";
$a[] = "Ismael";
$a[] = "Javier";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Noel";
$a[] = "Ofelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eva";
$a[] = "Ernesto";
$a[] = "Enrique";
$a[] = "Tony";
$a[] = "Uziel";
$a[] = "Violeta";
$a[] = "Lisa";
$a[] = "Elizabeth";
$a[] = "Eduardo";
$a[] = "Wilson";
$a[] = "Vicky";
$a[] = "Samuel";
$a[] = "Alfredo";
$a[] = "William";
$a[] = "Frank";
$a[] = "Akemi";
$a[] = "Dai";
$a[] = "Isabelle";
$a[] = "Andrea";

$q = $_REQUEST["q"];
$pista = "";

if ($q !== "") {
    $q = strtolower($q);
    $tam = strlen($q);
    foreach ($a as $nombre) {
        if (stristr($q, substr($nombre, 0, $tam))) {
            if ($pista === "") {
                $pista = $nombre;
            } else {
                $pista .= ", $nombre";
            }
        }
    }
}

echo $pista === "" ? "No hay sugerencias" : $pista;
