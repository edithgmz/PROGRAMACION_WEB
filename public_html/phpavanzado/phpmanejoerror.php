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
        <title>Manejo de Errores PHP</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h3>7. Manejo de Errores PHP</h3>
    </table>
    <?php

    function errorPersonalizado($errno, $errstr) {
        echo "<b>Error:</b> [$errno] $errstr<br>";
        echo "Fin Script";
        die();
    }

    set_error_handler("errorPersonalizado", E_USER_WARNING);

    $test = 21;
    echo "Valor: $test <br>";
    echo "<br>";
    if ($test >= 10) {
        trigger_error("El valor debe ser 10 o menor", E_USER_WARNING);
    }
    ?>
</body>
</html>
