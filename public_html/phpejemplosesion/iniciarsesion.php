<?php

/*
  Instituto Tecnológico de Chihuahua II
  Carrera: Ingeniería en Sistemas Computacionales
  Materia: Programación Web

  Aluma: Priscila Edith Gómez Rascón
  Número de Control: 15551384
 */

session_start();
$error = "";

if (isset($_POST['iniciar'])) {
    if (empty($_POST['usuario']) or empty($_POST['contrasenia'])) {
        $error = "Usuario y/o contraseña inválidos.";
    } else {
        include './conexion.php';
        
        $usuario1 = mysqli_real_escape_string($conexion, stripslashes($_POST['usuario']));
        $contrasenia1 = mysqli_real_escape_string($conexion, stripslashes($_POST['contrasenia']));

        $sql = "select * from miembros where contrasenia='" . $contrasenia1 . "' and usuario='" . $usuario1 . "'";
        $query = mysqli_query($conexion, $sql);
        $filas = mysqli_num_rows($query);
        if ($filas == 1) {
            $_SESSION['inises_usuario'] = $usuario1;
            header("location: bienvenida.php");
        } else {
            $error = "Usuario y/o contraseña inválidos.";
        }
        mysqli_close($conexion);
    }
}
