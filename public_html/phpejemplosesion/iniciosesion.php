<!DOCTYPE html>
<!--
Instituto Tecnológico de Chihuahua II
Carrera: Ingeniería en Sistemas Computacionales
Materia: Programación Web

Aluma: Priscila Edith Gómez Rascón
Número de Control: 15551384
-->
<?php
include './iniciarsesion.php';
?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio de Sesión</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div id="principal">
            <div id="inisesion">
                <h3>Inicio de Sesión</h3>
                <br>
                <form method="post" action="">
                    <label>Usuario:</label>
                    <input type="text" name="usuario" id="usuario" placeholder="usuario">
                    <br><br>
                    <label>Contraseña:</label>
                    <input type="password" name="contrasenia" id="contrasenia" placeholder="********">
                    <br>
                    <input type="submit" name="iniciar" value="    Iniciar Sesión    ">
                    <span> <?php echo $error; ?> </span>
                </form>
            </div>
        </div>
    </body>
</html>
