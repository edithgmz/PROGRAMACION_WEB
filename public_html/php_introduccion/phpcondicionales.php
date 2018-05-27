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
        <title>Condicionales PHP</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h3>6. Condicionales PHP</h3>
        <?php
        $hora = date("H");
        $color = "azul";
        echo "Hora: " . $hora;
        echo "<br>";
        echo "Color: " . $color;
        echo "<br><br>";

        #Condicional if
        echo "<p class='sub'> 6.1. Condicional if </p>";
        if ($hora < "20") {
            echo "¡Ten un buen día!";
        }
        echo "<br><br>";
        ?>

        <?php
        #Condicional if...else
        echo "<p class='sub'> 6.2. Condicional if...else </p>";
        if ($hora < "20") {
            echo "¡Ten un buen día!";
        } else {
            echo "¡Ten una buena noche!";
        }
        echo "<br><br>";
        ?>

        <?php
        #Condicional if...elseif...else
        echo "<p class='sub'> 6.3. Condicional if...elseif...else </p>";
        if ($hora < "10") {
            echo "¡Ten una buena mañana!";
        } elseif ($hora < "20") {
            echo "¡Ten un buen día!";
        } else {
            echo "¡Ten una buena noche!";
        }
        echo "<br><br>";
        ?>

        <?php
        #Condicional switch
        echo "<p class='sub'> 6.4. Condicional switch </p>";
        switch ($color) {
            case "rojo":
                echo "Tu color favorito es el rojo.";
                break;
            case "azul":
                echo "Tu color favorito es el azul.";
                break;
            case "verde":
                echo "Tu color favorito es el verde.";
                break;
            default:
                echo "Tu color favorito no es el rojo, ni el azul, ni el verde.";
        }
        ?>
    </body>
</html>
