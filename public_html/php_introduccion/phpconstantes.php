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
        <title>Constantes PHP</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h3>4. Constantes PHP</h3>
        <?php
        #Crear una constante con sensibilidad a mayúsculas
        echo "<p class='sub'> 4.1. Constante con sensibilidad a mayúsculas </p>";
        define("MATERIA", "Programación Web");
        print "<p class='sub'> Se imprime una constante que tiene sensibilidad a mayúsculas: </p>";
        print MATERIA;
        print "<br>";
        print materia; //Genera error
        print "<br>";

        #Crear una constante sin sensibilidad a mayúsculas
        echo "<p class='sub'> 4.2. Constante sin sensibilidad a mayúsculas </p>";
        define("TEMA", "Programación del Lado del Servidor", true);
        print "<p class='sub'> Se imprime una constante que no tiene sensibilidad a mayúsculas: </p>";
        print tema;
        print "<br>";
        print TEMA;
        print "<br>";
        print TeMa;
        print "<br>";

        #Se puede usar globalmente
        echo "<p class='sub'> 4.3. Uso global de una constante </p>";

        function prueba() {
            print MATERIA;
        }

        prueba();
        ?>
    </body>
</html>
