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
        <title>Funciones PHP</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h3>8. Funciones PHP</h3>
        <?php
        #Función sin argumento
        echo "<p class='sub'> 8.1. Función sin argumento </p>";

        function materia() {
            echo "Programación Web";
        }

        materia();
        echo "<br><br>";
        ?>

        <?php
        #Función con un argumento
        echo "<p class='sub'> 8.2. Función con un argumento </p>";

        function tipoProgramacion($nombre) {
            echo "Programación $nombre <br>";
        }

        tipoProgramacion("Web");
        tipoProgramacion("Orientada a Objetos");
        tipoProgramacion("Lógica y Funcional");
        tipoProgramacion("Secuencial");
        echo "<br>";
        ?>

        <?php
        #Función con dos argumentos
        echo "<p class='sub'> 8.3. Función con dos argumentos </p>";

        function alumno($nombre, $numcontrol) {
            echo "Alumno: $nombre <br>";
            echo "Número de Control: $numcontrol <br>";
        }

        alumno("Priscila Edith Gómez Rascón", 15551384);
        echo "<br>";
        ?>

        <?php
        #Función con argumento default
        echo "<p class='sub'> 8.4. Función con argumento default </p>";

        function edad($edad = 18) {
            echo "Tienes $edad años <br>";
        }

        edad(25);
        edad();
        edad(21);
        edad(19);
        echo "<br>";
        ?>

        <?php
        #Función que retorna un valor
        echo "<p class='sub'> 8.5. Función que retorna un valor </p>";

        function suma($num1, $num2) {
            $suma = $num1 + $num2;
            return $suma;
        }

        echo "25 + 10 = " . suma(25, 10);
        echo "<br>";
        echo "4 + 15 = " . suma(4, 15);
        echo "<br>";
        echo "19 + 3 = " . suma(19, 3);
        ?>
    </body>
</html>
