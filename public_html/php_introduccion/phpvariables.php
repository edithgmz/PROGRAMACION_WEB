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
        <title>Variables PHP</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h3>2. Variables PHP</h3>
        <?php
        #Las variables definen su tipo luego de que les es asignado un valor
        $txt = "Edith Gómez";
        $x = 10;
        $y = 13.4;
        print "<p class='sub'> Se trabaja con variables en PHP: </p>";
        print "<p class='sub'> 2.1. Se muestra texto más el contenido de una variable: </p>";

        #Primera forma de imprimir una variable
        print "Autor de la página: $txt. <br>";

        #Segunda forma de imprimir una variable
        print "Autor de la página: " . $txt . ". <br>";
        print "<p class='sub'> 2.2. Suma de dos variables </p>";

        #Imprime suma de dos variables
        print $x + $y;
        ?>

        <?php
        #Variables globales
        $a = 4;
        echo "<p class='sub'> 2.3. Uso de variables globales </p>";

        function test1() {
            echo "Variable dentro de la función: $a <br>"; //Genera error
        }

        echo "Variable fuera de la función: $a <br>";
        test1();
        ?>

        <?php
        #Variables locales
        print "<p class='sub'> 2.4. Uso de variables locales </p>";

        function test2() {
            $b = 5;
            print "Variable dentro de la función: $b <br>"; //Genera error
        }

        test2();
        print "Variable fuera de la función: $b <br>";
        ?>

        <?php
        #Palabra reservada "global"
        echo "<p class='sub'> 2.5. Uso de la palabra reservada <em> global </em> </p>";
        $c = 45;
        $d = 9;

        function test3() {
            global $c, $d; //Se pueden usar fuera de la función
            $d = $c + $d;
        }

        test3();
        echo $d;
        ?>

        <?php
        #Palabra reservada "static"
        echo "<p class='sub'> 2.6. Uso de la palabra reservada <em> static </em>  </p>";

        function test5() {
            static $g = 0; //Permite que el valor de la variable permanezca
            echo $g;
            $g++;
            echo "<br>";
        }

        test5();
        test5();
        test5();
        test5();
        test5();

        echo "<br>";
        ?>

        <?php
        #Variables Superglobales
        echo "<p class='sub'> 2.7. Variables superglobales de PHP </p>";

        echo "<p class='sub2'> 2.7.1. PHP GLOBALS </p>";
        $e = 34;
        $f = 11;

        function test4() {
            $GLOBALS['f'] = $GLOBALS['e'] + $GLOBALS['f']; //Actualiza variables globales automáticamente
        }

        test4();
        print $f;
        ?>

        <?php
        echo "<p class='sub2'> 2.7.2. PHP _SERVER </p>";

        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
        ?>

        <h4>Formulario para probar los puntos 2.7.3 y 2.7.4</h4>        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Nombre: <input type="text" name="fnombre">
            <br>
            Edad: <input type="number" name="fedad">
            <br><br>
            <input type="submit">
        </form>

        <?php
        echo "<p class='sub2'> 2.7.3. PHP _REQUEST </p>";

        #Uso de _REQUEST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = htmlspecialchars($_REQUEST['fnombre']);
            if (empty($nombre)) {
                echo "Nombre está vacío";
            } else {
                echo $nombre;
            }
        }
        ?>

        <?php
        echo "<p class='sub2'> 2.7.4. PHP _POST </p>";

        #Uso de _POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $edad = htmlspecialchars($_REQUEST['fedad']);
            if (empty($edad)) {
                echo "Edad está vacío";
            } else {
                echo $edad;
            }
        }
        echo "<br>"
        ?>
    </body>
</html>
