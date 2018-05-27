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
        <title>Tipos de Datos PHP</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h3>3. Tipos de datos PHP</h3>
        <?php
        print "<p class='sub'> PHP soporta los siguientes tipos de datos </p>";

        #String
        print "<p class='sub'> 3.1. Cadenas </p>";
        $cad1 = "Programación";
        $cad2 = "Web";
        print "Cadena 1: " . $cad1;
        var_dump($cad1); //Permite conocer el tipo de una variable
        print "Cadena 2: " . $cad2;
        var_dump($cad2);
        ?>

        <?php
        print "<p class='sub2'> 3.1.1. Funciones con cadenas </p>";
        $cadena = "Priscila Edith";
        echo "Cadena: " . $cadena;
        echo "<br>";

        #Función para conocer la longitud de una cadena
        echo "Longitud: " . strlen($cadena);
        echo "<br>";

        #Función para conocer la cantidad de palabras en una cadena
        echo "Cantidad de palabras: " . str_word_count($cadena);
        echo "<br>";

        #Función para imprimir el contenido de una cadena de forma inversa
        echo "Al revés: " . strrev($cadena);
        echo "<br>";

        #Función para buscar la posición dónde inicia una palabra en una cadena
        echo "Busca la posición de <em>Edith</em>: " . strpos($cadena, "Edith");
        echo "<br>";

        #Función para reemplazar una palabra en una cadena
        echo "Reemplazar <em>Edith</em> por <em>Gómez</em>: " . str_replace("Edith", "Gómez", $cadena);
        echo "<br><br>";
        ?>

        <?php
        #Integer
        print "<p class='sub'> 3.2. Enteros </p>";
        $num1 = 1234;
        $num2 = -5678;
        print "Numero 1: " . $num1;
        var_dump($num1);
        print "Numero 2: " . $num2;
        var_dump($num2);
        echo "<br>";
        ?>

        <?php
        #Float
        print "<p class='sub'> 3.3. Punto flotante/Dobles </p>";
        $num3 = 1234.55;
        $num4 = -5678.99;
        print "Numero 3: " . $num3;
        var_dump($num3);
        print "Numero 4: " . $num4;
        var_dump($num4);
        echo "<br>";
        ?>

        <?php
        #Boolean
        print "<p class='sub'> 3.4. Booleanos </p>";
        $bool1 = false;
        $bool2 = true;
        print "Booleano 1: " . $bool1; //No imprime el contenido porque la variable es falsa
        var_dump($bool1);
        print "Booleano 2: " . $bool2;
        var_dump($bool2);
        echo "<br>";
        ?>

        <?php
        #Array
        print "<p class='sub'> 3.5. Arreglos </p>";
        $arr = array("Samuel", "Alfredo", "William", "Frank");
        $arrlong = count($arr); //Permite conocer la longitud de un arreglo
        print "Arreglo: <br>";
        for ($i = 0; $i < $arrlong; $i++) { //Ciclo for para imprimir cada elemento del arreglo
            print "Elemento " . $i . " : " . $arr[$i] . "<br>";
        }
        var_dump($arr);
        echo "<br>";
        ?>

        <?php
        #Objeto
        print "<p class='sub'> 3.6. Objetos </p>";

        class Alumno { //Clase tipo Alumno

            function Alumno() { //Función por default que define un atributo
                $this->nombre = "Priscila Edith Gómez Rascón"; //Atributo de la clase
            }

        }

        $alumno = new Alumno(); //Se crea e instancia un objeto
        print $alumno->nombre; //Se imprime el valor contenido en el atributo
        var_dump($alumno);
        echo "<br>";
        ?>

        <?php
        #Null
        print "<p class='sub'> 3.7. NULO </p>";
        $var = null;
        print "Variable: " . $var; //No imprime el contenido porque la variable es nula
        var_dump($var);
        echo "<br>";
        ?>

        <?php
        #Recurso
        print "<p class='sub'> 3.8. Recurso </p>";
        print "No es un tipo de datos real. Es el almacenamiento de una referencia a funciones y recursos "
                . "externos a PHP. <br> Un ejemplo común de su uso es una llamada a una base de datos.";
        ?>
    </body>
</html>
