<!DOCTYPE html>
<!--
Instituto Tecnológico de Chihuahua II
Carrera: Ingeniería en Sistemas Computacionales
Materia: Programación Web

Aluma: Priscila Edith Gómez Rascón
Número de Control: 15551384
-->
<?php
$cookie_nombre = "alumno";
$cookie_valor = "Priscila Gómez";
setcookie($cookie_nombre, $cookie_valor, time() + 86400, "/"); // 86400 = 1 día
?>
<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fecha y Hora PHP</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h3>4. Cookies PHP</h3>
        <?php
        if (!isset($_COOKIE[$cookie_nombre])) {
            echo "La cookie llamada '" . $cookie_nombre . "' no se ha establecido.";
        } else {
            echo "Cookie '" . $cookie_nombre . "' se ha establecido.<br>";
            echo "Su valor es: " . $_COOKIE[$cookie_nombre];
        }
        echo "<br>";
        echo "<br>";
        echo "Nota: Si no puedes ver la cookie recarga la página.";
        echo "<br>";
        echo "<br>";
        ?>
        <?php
        if (count($_COOKIE) > 0) {
            echo "Las cookies están habilitadas.";
        } else {
            echo "Las cookies no están habilitadas.";
        }
        ?>
    </body>
</html>
