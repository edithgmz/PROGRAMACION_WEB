<!DOCTYPE html>
<html>
    <head lang="es">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ciclo for con PHP</title>
    </head>
    <body>
        <h2>Ciclo for con PHP</h2>
        <hr>
        <p>
            Se implementa un ciclo for con PHP y se muestra el resultado.
        </p>
        <?php
        //El usuario no puede ver el código porque es el servidor el que se encarga de ejecutarlo
        echo "<br>Ciclo for con 10 repeticiones";
        echo "<br>";
        for($i = 0; $i < 10; $i++){
            echo "Valor de i: " . $i;
            echo "<br>";
        }
        ?>
    </body>
</html>
