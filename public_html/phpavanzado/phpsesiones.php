<?php
session_start();
?>
<!DOCTYPE html>
<!--
Instituto Tecnológico de Chihuahua II
Carrera: Ingeniería en Sistemas Computacionales
Materia: Programación Web

Aluma: Priscila Edith Gómez Rascón
Número de Control: 15551384
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sesiones PHP</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h3>5. Sesiones PHP</h3>
        <?php
        require './componentes/variablessesion.php';
        echo "Variables de sesión establecidas.";
        echo "<br>";
        echo "<br>";

        echo "Mi color favorito es: " . $_SESSION["favcolor"] . ". <br>";
        echo "Mi animal favorito es: " . $_SESSION["favanimal"] . ". <br>";
        
        echo "<br>";
        
        print_r($_SESSION);
        ?>
    </body>
</html>
