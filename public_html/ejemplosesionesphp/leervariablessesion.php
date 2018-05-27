<!DOCTYPE html>
<?php session_start(); ?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Leer Variables Sesión</title>
    </head>
    <body>
        <h2>Leer Variables de Sesión</h2>
        <p>
            Se leen o recuperan los valores de las variables de
            sesión y se muestran en la página.
        </p>
        <hr>
        <?php
        //Leer variables de sesión
        if (isset($_SESSION['nombre'])){
            $nombre1 = $_SESSION['nombre'];
            echo "Nombre: $nombre1";
        }
        
        if (isset($_SESSION['heroe'])){
            $heroe1 = $_SESSION['heroe'];
            echo "<br>Héroe: $heroe1";
        }
        ?>
        <br><br><br>
        <a href="escribirvariablessesion.php">
            Escribir variables de sesión
        </a>
    </body>
</html>
