<?php

/*
Instituto Tecnológico de Chihuahua II
Carrera: Ingeniería en Sistemas Computacionales
Materia: Programación Web

Aluma: Priscila Edith Gómez Rascón
Número de Control: 15551384
*/

session_start();

if(session_destroy()){
    header("location: iniciosesion.php");
}
