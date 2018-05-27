<!DOCTYPE html>
<!--
Instituto Tecnológico de Chihuahua II
Carrera: Ingeniería en Sistemas Computacionales
Materia: Programación Web

Aluma: Priscila Edith Gómez Rascón
Número de Control: 15551384
-->
<?php include './sesion.php'; ?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienvenida</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div id="perfil">
            <b id="bienvenida">Bienvenido: <i><?php echo $inicio_sesion; ?></i></b>
            <br><br>
            <b id="finsesion"><a href="finsesion.php">Finalizar Sesión</a></b>
            <br>
        </div>
    </body>
</html>
