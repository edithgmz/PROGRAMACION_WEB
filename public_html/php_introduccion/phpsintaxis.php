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
        <title>Sintaxis PHP</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h3>1. Sintaxis PHP</h3>
        <?php
        //Siempre debe haber punto y coma (;) al finalizar una instrucción echo
        echo "<p class='sub'> En la siguiente línea se muestra el resultado de una suma en PHP: </p>";

        //Se pueden comentar partes de código
        $suma = 5 /* + 15 */ + 5;
        echo $suma;

        /*
         * En PHP las palabras reservadas no son sensibles a mayúsculas
         * a diferencia de las variables.
         */
        echo "<p class='sub'> Se muestra la sensibilidad a mayúsculas de PHP: </p>";
        $color = "Verde";
        ECHO "Mi celular es " . $color . "<br>";
        echo "Mi casa es " . $COLOR . "<br>"; //Genera error
        EcHo "Mi auto es " . $coLOR . "<br>"; //Genera error
        ?>
    </body>
</html>
