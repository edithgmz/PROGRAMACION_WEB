<!DOCTYPE html>
<?php session_start(); ?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Escribir Variables Sesión</title>
    </head>
    <body>
        <h2>Escribir Variables de Sesión</h2>
        <p>
            Una variable de sesión existe mientras el usuario está conectado
            a la aplicación Web.<br>
            Se pueden crear y acceder desde cualquier página del dominio.
        </p>
        <hr>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Nombre usuario:
            <input type="text" name="nombre">
            <br><br>
            Súper héroe:
            <select name="selectHeroe">
                <option value="Superman" selected>
                    Superman
                </option>
                <option value="Batman">
                    Batman
                </option>
                <option value="Ironman">
                    Ironman
                </option>
                <option value="Capitan America">
                    Capitán América
                </option>
            </select>
            <br><br>
            <input type="submit" value="    Escribir    ">
        </form>
        <?php
        //Escribir datos como variables de sesión
        if (isset($_POST['nombre'])) {
            $_SESSION['nombre'] = $_POST['nombre'];
        }
        if (isset($_POST['selectHeroe'])) {
            $_SESSION['heroe'] = $_POST['selectHeroe'];
        }
        ?>
        <br><br>
        <a href="leervariablessesion.php">
            Leer variables de sesión
        </a>
    </body>
</html>
