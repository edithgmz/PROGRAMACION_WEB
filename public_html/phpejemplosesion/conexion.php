<?php

/*
  Instituto Tecnológico de Chihuahua II
  Carrera: Ingeniería en Sistemas Computacionales
  Materia: Programación Web

  Aluma: Priscila Edith Gómez Rascón
  Número de Control: 15551384
 */

$host = 'localhost';
$usser = 'root';
$pass = 'root'; //Si no se tiene contraseña debe dejarse en blanco este campo
$bd = 'phpsesiones';

$conexion = mysqli_connect($host, $usser, $pass, $bd);

if (mysqli_connect_errno()) {
    echo "Error en conexión de base de datos: " . mysqli_connect_error();
}
