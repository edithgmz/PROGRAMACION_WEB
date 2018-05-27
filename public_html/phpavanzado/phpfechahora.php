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
        <title>Fecha y Hora PHP</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h3>2. Fecha y Hora PHP</h3>
        <?php
        echo "<p class='sub'> 2.1. Fecha simple </p>";
        echo "Hoy es: " . date("d/m/Y") . "<br>";
        echo "Hoy es: " . date("d.m.Y") . "<br>";
        echo "Hoy es: " . date("d-m-Y") . "<br>";
        echo "Hoy es: " . date("l") . "<br>";

        echo "<br>";

        echo "<p class='sub'> 2.2. Hora simple </p>";
        echo "La hora es: " . date("h:i:sa");

        echo "<br>";
        echo "<br>";

        echo "<p class='sub'> 2.3. Zona horaria </p>";
        date_default_timezone_set("America/Chihuahua");
        echo "La hora es: " . date("h:i:sa");

        echo "<br>";
        echo "<br>";

        echo "<p class='sub'> 2.4. Crear una fecha con la función <em> mktime() </em> </p>";
        $d1 = mktime(10, 14, 18, 11, 10, 2017);
        echo "Fecha creada: " . date("d-m-Y h:i:sa", $d1);

        echo "<br>";
        echo "<br>";

        echo "<p class='sub'> 2.5. Crear una fecha, a partir de una cadena, con la función <em> strtotime() </em> </p>";
        $d2 = strtotime("10:14:18pm November 10 2017");
        echo "Fecha creada: " . date("d/m/Y h:i:sa", $d2) . "<br>";

        echo "<br>";

        $d3 = strtotime("tomorrow");
        echo "Mañana: " . date("d/m/Y h:i:sa", $d3) . "<br>";

        echo "<br>";

        $d4 = strtotime("next Saturday");
        echo "Siguiente sábado: " . date("d/m/Y h:i:sa", $d4) . "<br>";

        echo "<br>";

        $d5 = strtotime("+3 Months");
        echo "+3 Meses: " . date("d/m/Y h:i:sa", $d5) . "<br>";

        echo "<br>";

        echo "Fechas de los siguientes cuatro Domingos: <br>";
        $fechaini = strtotime("Sunday");
        $fechafin = strtotime("+4 weeks", $fechaini);
        while ($fechaini < $fechafin) {
            echo date("M d", $fechaini) . "<br>";
            $fechaini = strtotime("+1 week", $fechaini);
        }

        echo "<br>";

        echo "Cantidad de días hasta el 3 de Julio: <br>";
        $d6 = strtotime("July 03");
        $d7 = ceil(($d6 - time()) / 60 / 60 / 24);
        echo "Quedan " . $d7 . " días hasta el 03 de Julio.";

        echo "<br>";
        ?>
    </body>
</html>
