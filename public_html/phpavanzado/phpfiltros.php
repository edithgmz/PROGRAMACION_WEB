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
        <title>Filtros PHP</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h3>6. Filtros PHP</h3>
    </table>
    <?php
    echo "<p class='sub'> 6.1. Filtros Básicos </p>";
    echo "<p class='sub2'> 6.1.1. Función <em> filter_var() </em> </p>";
    echo "Se remueve la etiqueta h1 de la cadena:";
    echo "<br>";
    $str1 = "<h1>¡Hola Mundo!</h1>";
    $strnvo1 = filter_var($str1, FILTER_SANITIZE_STRING);
    echo $strnvo1;

    echo "<br>";

    echo "<p class='sub2'> 6.1.2. Función <em> filter_var() </em> </p>";
    echo "Se verifica que la variable sea de tipo entero:";
    echo "<br>";
    $num1 = 40;
    echo $num1;
    echo "<br>";
    if (filter_var($num1, FILTER_VALIDATE_INT) === 0 || !filter_var($num1, FILTER_VALIDATE_INT) === false) {
        echo("La variable es de tipo entero.");
    } else {
        echo("La variable no es de tipo entero.");
    }

    echo "<br>";

    echo "<p class='sub2'> 6.1.3. Función <em> filter_var() </em> </p>";
    echo "Se valida una dirección IPv4:";
    echo "<br>";
    $ipv4 = "192.168.1.254";
    echo $ipv4;
    echo "<br>";
    if (!filter_var($ipv4, FILTER_VALIDATE_IP) === false) {
        echo("$ipv4 es una dirección IPv4 válida.");
    } else {
        echo("$ipv4 no es una dirección IPv4 válida.");
    }

    echo "<br>";

    echo "<p class='sub2'> 6.1.4. Función <em> filter_var() </em> </p>";
    echo "Limpia y valida una dirección de correo electrónico:";
    echo "<br>";
    $correo1 = "edith.gomez4@outlook.com";
    $correo2 = filter_var($correo1, FILTER_SANITIZE_EMAIL);
    if (!filter_var($correo2, FILTER_VALIDATE_EMAIL) === false) {
        echo("$correo1 es una dirección de correo electrónico válida.");
    } else {
        echo("$correo1 no es una dirección de correo electrónico válida.");
    }

    echo "<br>";

    echo "<p class='sub2'> 6.1.5. Función <em> filter_var() </em> </p>";
    echo "Limpia y valida una URL:";
    echo "<br>";
    $url1 = "https://www.youtube.com";
    $url2 = filter_var($url1, FILTER_SANITIZE_URL);
    if (!filter_var($url2, FILTER_VALIDATE_URL) === false) {
        echo("$url1 es una URL válida.");
    } else {
        echo("$url1 no es una URL válida.");
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "<p class='sub'> 6.2. Filtros avanzados </p>";
    echo "<p class='sub2'> 6.2.1. Función <em> filter_var() </em> </p>";
    echo "Validar un entero dentro de un rango:";
    echo "<br>";
    $num2 = 144;
    $min = 10;
    $max = 200;
    echo "Variable: $num2 <br>";
    echo "Mínimo: $min <br>";
    echo "Máximo: $max <br>";
    if (filter_var($num2, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {
        echo("El valor de la variable no se encuentra en el rango.");
    } else {
        echo("El valor de la variable se encuentra en el rango.");
    }

    echo "<br>";

    echo "<p class='sub2'> 6.2.2. Función <em> filter_var() </em> </p>";
    echo "Se valida una dirección IPv6:";
    echo "<br>";
    $ipv6 = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
    if (!filter_var($ipv6, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
        echo("$ipv6 es una dirección IPv6 válida");
    } else {
        echo("$ipv6 no es una dirección IPv6 válida");
    }

    echo "<p class='sub2'> 6.2.3. Función <em> filter_var() </em> </p>";
    echo "Valida si una URL tiene un querystring:";
    echo "<br>";
    $url3 = "https://www.tumblr.com";
    if (!filter_var($url3, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
        echo("$url3 es una URL válida.");
    } else {
        echo("$url3 no es una URL válida.");
    }

    echo "<br>";

    echo "<p class='sub2'> 6.2.4. Función <em> filter_var() </em> </p>";
    echo "Se remueve la etiqueta h1 de la cadena y los caracteres ASCII cuyo valor es mayor a 127:";
    echo "<br>";
    $str2 = "<h1>¡Hola Mundo ÆØÅ!</h1>";
    $strnvo2 = filter_var($str2, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    echo $strnvo2;
    ?>
</body>
</html>
