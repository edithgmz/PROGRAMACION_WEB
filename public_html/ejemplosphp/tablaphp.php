<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabla con PHP</title>
        <style>
            table, tr, td{
                border: 1px solid black;
            }
            td{
                padding: 20px;
            }
            tr:nth-child(odd){
                background-color: lightgray;
            }
        </style>
    </head>
    <body>
        <h2>Tabla con PHP</h2>
        <p>
            Se crea una tabla de 100 renglones con código PHP.
        </p>
        <?php
        echo "<table>";
        for($j = 0; $j < 100; $j++){
            echo "<tr><td>";
            echo "Fila: " . $j;
            echo "</td></tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>
