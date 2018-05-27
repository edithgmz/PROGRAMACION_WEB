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
        <title>Formulario 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <?php
        $nombre = $correo = $genero = $biografia = $pagweb = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = probar_entrada($_POST["nombre"]);
            $correo = probar_entrada($_POST["correo"]);
            $pagweb = probar_entrada($_POST["pagweb"]);
            $biografia = probar_entrada($_POST["biografia"]);
            $genero = probar_entrada($_POST["genero"]);
        }

        function probar_entrada($datos) {
            $datos = trim($datos);
            $datos = stripslashes($datos);
            $datos = htmlspecialchars($datos);
            return $datos;
        }
        ?>
        <h2>Formulario 2: Validación de formulario</h2>
        <hr>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            Nombre:
            <input type="text" size="20" name="nombre" id="nombre">
            <br><br>
            Correo:
            <input type="text" size="20" name="correo" id="correo">
            <br><br>
            Página web:
            <input type="text" size="20" name="pagweb" id="pagweb">
            <br><br>
            Biografía:<br>
            <textarea rows="5" cols="40" name="biografia" id="biografia"></textarea>
            <br><br>
            Género:
            <input type="radio" name="genero" id="femenino" value="Femenino">Femenino
            <input type="radio" name="genero" id="masculino" value="Masculino">Masculino
            <input type="radio" name="genero" id="otro" value="Otro">Otro
            <br><br>
            <input type="submit" value="    Enviar    ">
            <br><br><br>
        </form>
        <?php
        echo "<h3>Tus datos:</h3>";
        echo "Nombre: $nombre";
        echo "<br>";
        echo "Correo: $correo";
        echo "<br>";
        echo "Página web: $pagweb";
        echo "<br>";
        echo "Biografía: $biografia";
        echo "<br>";
        echo "Género: $genero";
        ?>
    </body>
</html>
