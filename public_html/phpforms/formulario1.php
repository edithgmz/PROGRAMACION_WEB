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
        <title>Formulario 1: Bienvenida</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <?php
        echo "<h3>¡Bienvenido " . $_POST["nombre"] . "!</h3>";
        echo "Tu dirección de correo electrónico es: " . $_POST["correo"];
        ?>
    </body>
</html>
