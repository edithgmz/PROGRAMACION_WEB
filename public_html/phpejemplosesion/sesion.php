<?php

/*
  Instituto Tecnológico de Chihuahua II
  Carrera: Ingeniería en Sistemas Computacionales
  Materia: Programación Web

  Aluma: Priscila Edith Gómez Rascón
  Número de Control: 15551384
 */

include './conexion.php';

session_start();

$checa_usuario = $_SESSION['inises_usuario'];

$sql = "select usuario from miembros where usuario='" . $checa_usuario . "'";
$query = mysqli_query($conexion, $sql);
$filas = mysqli_fetch_assoc($query);
$inicio_sesion = $filas['usuario'];
if (!isset($inicio_sesion)) {
    mysqli_close($conexion);
    header('Location: iniciosesion.php');
}
