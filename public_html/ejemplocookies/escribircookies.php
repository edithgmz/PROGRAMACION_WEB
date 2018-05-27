<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Escribir Cookies</title>
    </head>
    <body>
        <h2>Escribir Cookies</h2>
        <p>
            Una cookie es una pieza de información en formato de texto que se
            almacena en la computadora del usuario y está asociada a un
            navegador y un dominio. <br>
            El formato es: variable-valor.
        </p>
        <hr>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Nombre:
            <input type="text" name="nombre">
            <br><br>
            Edad:
            <input type="number" name="edad" min="1" max="120">
            <br><br>
            Color preferido:
            <input type="color" name="color">
            <br><br><br>
            <input type="submit" value="    Guardar    ">
        </form>
        <?php
        //Obtener datos del formulario y almacenar en cookies
        //Asignar tiempo de vigencia para las cookies
        $expira = time() + 60 * 60 * 24 * 30;
        //Validar cada campo de formulario, que tiene un valor
        if (isset($_POST['nombre'])) {
            setcookie("nombreusuario", $_POST['nombre'], $expira);
        }
        if (isset($_POST['edad'])) {
            setcookie("edadusuario", $_POST['edad'], $expira);
        }
        if (isset($_POST['color'])) {
            setcookie("colorusuario", $_POST['color'], $expira);
        }
        ?>
        <br><br><br>
        <a href="leercookies.php">
            Leer Cookies
        </a>
    </body>
</html>
