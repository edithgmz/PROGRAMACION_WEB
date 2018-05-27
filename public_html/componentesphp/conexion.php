<?php

/*
 * Conexión a la base de datos "programacionweb" de MySQL
 */

//Conectarse a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "programacionweb");
//Validar si la conexión tuvo éxito
if (mysqli_connect_errno()) {
    echo "Error en conexión de BD: " . mysqli_connect_error();
}
