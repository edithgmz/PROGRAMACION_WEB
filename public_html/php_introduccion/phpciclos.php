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
        <title>Ciclos PHP</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h3>7. Ciclos PHP</h3>
        <?php
        $num = 1;
        $colores = array("rojo", "verde", "azul", "amarillo");
        echo "Número: " . $num;
        echo "<br><br>";
        echo "Arreglo: <br>";
        print_r($colores);
        echo "<br><br>";

        #Ciclo while
        echo "<p class='sub'> 7.1. Ciclo while </p>";
        while ($num <= 5) {
            echo "El número es: $num <br>";
            $num++;
        }
        echo "<br>";
        ?>

        <?php
        #Ciclo do...while
        echo "<p class='sub'> 7.2. Ciclo do...while </p>";
        do {
            echo "El número es: $num <br>";
            $num--;
        } while ($num >= 1);
        echo "<br>";
        ?>

        <?php
        #Ciclo for
        echo "<p class='sub'> 7.3. Ciclo for </p>";
        for ($i = 0; $i <= 9; $i++) {
            echo "El número es: $i <br>";
        }
        echo "<br>";
        ?>

        <?php
        #Ciclo foreach
        echo "<p class='sub'> 7.4. Ciclo foreach </p>";
        foreach ($colores as $valor) {
            echo "Valor: $valor <br>";
        }
        ?>
    </body>
</html>
