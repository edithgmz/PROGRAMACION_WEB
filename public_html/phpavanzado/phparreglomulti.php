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
        <title>Arreglos Multidimensionales PHP</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h3>1. Arreglos Multidimensionales PHP</h3>
        <?php
        echo "<p class='sub'> 1.1. Arreglo bidimensional </p>";

        $arrbidi = array(
            array("Samuel", 27, "Empresario"),
            array("Alfredo", 26, "Empresario"),
            array("Akemi", 25, "Pintor"),
            array("Dai", 20, "Cocinero"),
            array("William", 15, "Estudiante"),
            array("Frank", 16, "Estudiante"),
            array("Ronnie", 19, "Estudiante"),
            array("Askar", 18, "Estudiante")
        );
        
        echo "<p class='sub2'> Se imprime el contenido del arreglo indicando de uno en uno las filas y columnas: </p>";
        echo "Nombre: " . $arrbidi[0][0] . ", Edad: " . $arrbidi[0][1] . ", Ocupación: " . $arrbidi[0][2] . ".<br>";
        echo "Nombre: " . $arrbidi[1][0] . ", Edad: " . $arrbidi[1][1] . ", Ocupación: " . $arrbidi[1][2] . ".<br>";
        echo "Nombre: " . $arrbidi[2][0] . ", Edad: " . $arrbidi[2][1] . ", Ocupación: " . $arrbidi[2][2] . ".<br>";
        echo "Nombre: " . $arrbidi[3][0] . ", Edad: " . $arrbidi[3][1] . ", Ocupación: " . $arrbidi[3][2] . ".<br>";
        echo "Nombre: " . $arrbidi[4][0] . ", Edad: " . $arrbidi[4][1] . ", Ocupación: " . $arrbidi[4][2] . ".<br>";
        echo "Nombre: " . $arrbidi[5][0] . ", Edad: " . $arrbidi[5][1] . ", Ocupación: " . $arrbidi[5][2] . ".<br>";
        echo "Nombre: " . $arrbidi[6][0] . ", Edad: " . $arrbidi[6][1] . ", Ocupación: " . $arrbidi[6][2] . ".<br>";
        echo "Nombre: " . $arrbidi[7][0] . ", Edad: " . $arrbidi[7][1] . ", Ocupación: " . $arrbidi[7][2] . ".<br>";
        
        echo "<br>";
        
        echo "<p class='sub2'> Se imprime el contenido del arreglo utilizando un ciclo for: </p>";
        for($fila = 0; $fila < 8; $fila++){
            echo "Fila $fila";
            echo "<ul>";
            for($columna = 0; $columna < 3; $columna++){
                echo "<li>" . $arrbidi[$fila][$columna] . "</li><br>";
            }
            echo "</ul>";
        }
        ?>
    </body>
</html>
