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
        <title>Formulario 4</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <?php
        $nombreErr = $correoErr = $generoErr = $pagwebErr = "";
        $nombre = $correo = $genero = $biografia = $pagweb = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nombre"])) {
                $nombreErr = "Se requiere el nombre.";
            } else {
                $nombre = probar_entrada($_POST["nombre"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $nombre)) {
                    $nombreErr = "Solo se permiten letras y espacios en blanco.";
                }
            }

            if (empty($_POST["correo"])) {
                $correoErr = "Se requiere el correo.";
            } else {
                $correo = probar_entrada($_POST["correo"]);
                if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                    $correoErr = "Formato de correo electrónico inválido.";
                }
            }

            if (empty($_POST["pagweb"])) {
                $pagweb = "";
            } else {
                $pagweb = probar_entrada($_POST["pagweb"]);
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $pagweb)) {
                    $pagwebErr = "URL inválida.";
                }
            }

            if (empty($_POST["biografia"])) {
                $biografia = "";
            } else {
                $biografia = probar_entrada($_POST["biografia"]);
            }

            if (empty($_POST["genero"])) {
                $generoErr = "Se requiere el género.";
            } else {
                $genero = probar_entrada($_POST["genero"]);
            }
        }

        function probar_entrada($datos) {
            $datos = trim($datos);
            $datos = stripslashes($datos);
            $datos = htmlspecialchars($datos);
            return $datos;
        }
        ?>
        <h2>Formulario 5: Mantener valores del formulario</h2>
        <hr>
        <p><span class="error">* campo requerido</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            Nombre *:
            <input type="text" size="20" name="nombre" id="nombre" value="<?php echo $nombre ?>">
            &nbsp;
            <span class="error"><?php echo $nombreErr; ?></span>
            <br><br>
            Correo *:
            <input type="text" size="20" name="correo" id="correo" value="<?php echo $correo ?>">
            &nbsp;
            <span class="error"><?php echo $correoErr; ?></span>
            <br><br>
            Página web:
            <input type="text" size="20" name="pagweb" id="pagweb" value="<?php echo $pagweb ?>">
            &nbsp;
            <span class="error"><?php echo $pagwebErr; ?></span>
            <br><br>
            Biografía:<br>
            <textarea rows="5" cols="40" name="biografia" id="biografia"><?php echo $biografia ?></textarea>
            <br><br>
            Género *:
            <input type="radio" name="genero" id="femenino" 
                   <?php if (isset($genero) && $genero == "Femenino") {
                       echo "Seleccionado";
                   } ?> value="Femenino">Femenino
            <input type="radio" name="genero" id="masculino"
                   <?php if (isset($genero) && $genero == "Masculino") {
                       echo "Seleccionado";
                   } ?> value="Masculino">Masculino
            <input type="radio" name="genero" id="otro"
                   <?php if (isset($genero) && $genero == "Otro") {
                       echo "Seleccionado";
                   } ?> value="Otro">Otro
            &nbsp;
            <span class="error"><?php echo $generoErr; ?></span>
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
