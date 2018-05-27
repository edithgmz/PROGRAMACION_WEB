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
        <title>Archivos PHP</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h3>3. Archivos PHP</h3>
        <?php
        echo "<p class='sub'> 3.1. Abrir archivo: <em> fopen() </em> </p>";
        $arch1 = fopen("texto.txt", "r") or die("No se ha podido abrir el archivo.");
        echo "Abriendo archivo...";
        echo "<br>";

        echo "<p class='sub'> 3.2. Leer archivo: <em> fread() </em> </p>";
        echo fread($arch1, filesize("texto.txt"));
        echo "<br>";

        echo "<p class='sub'> 3.3. Cerrar archivo: <em> fclose() </em> </p>";
        echo "El archivo se ha cerrado.";
        fclose($arch1);

        echo "<br>";
        echo "<br>";

        echo "<p class='sub'> 3.4. Leer una sola línea: <em> fgets() </em> </p>";
        $arch2 = fopen("texto.txt", "r") or die("No se ha podido abrir el archivo.");
        echo fgets($arch2);
        fclose($arch2);

        echo "<br>";
        echo "<br>";

        echo "<p class='sub'> 3.5. Leer línea por línea: <em> feof() </em> </p>";
        $arch3 = fopen("texto.txt", "r") or die("No se ha podido abrir el archivo.");
        while (!feof($arch3)) {
            echo fgets($arch3) . "<br>";
        }
        fclose($arch3);

        echo "<p class='sub'> 3.6. Leer caracter por caracter: <em> fgetc() </em> </p>";
        $arch4 = fopen("texto.txt", "r") or die("No se ha podido abrir el archivo.");
        while (!feof($arch4)) {
            echo fgetc($arch4);
        }
        fclose($arch4);

        echo "<br>";
        echo "<br>";

        echo "<p class='sub'> 3.7. Crear archivo: <em> fopen() </em> </p>";
        $arch5 = fopen("texto1.txt", "w");
        echo "El archivo se ha guardado en la carpeta 'phpavanzado'.";

        echo "<br>";
        echo "<br>";

        echo "<p class='sub'> 3.8. Escribir en archivo: <em> fwrite() </em> </p>";
        $arch6 = fopen("texto1.txt", "w") or die("No se ha podido abrir el archivo.");
        $txt1 = "Archivo creado\n";
        fwrite($arch6, $txt1);
        $txt2 = "en el punto 3.7\n";
        fwrite($arch6, $txt2);
        fclose($arch6);
        echo "Contenido escrito: <br>";
        $arch7 = fopen("texto1.txt", "r") or die("No se ha podido abrir el archivo.");
        while (!feof($arch7)) {
            echo fgets($arch7) . "<br>";
        }
        fclose($arch7);

        echo "<p class='sub'> 3.9. Sobreescribir en archivo: <em> fwrite() </em> </p>";
        $arch8 = fopen("texto1.txt", "w") or die("No se ha podido abrir el archivo.");
        $txt3 = "Se ha sobreescrito el contenido\n";
        fwrite($arch8, $txt3);
        $txt4 = "del archivo del punto 3.8\n";
        fwrite($arch8, $txt4);
        fclose($arch8);
        echo "Contenido sobreescrito: <br>";
        $arch9 = fopen("texto1.txt", "r") or die("No se ha podido abrir el archivo.");
        while (!feof($arch9)) {
            echo fgets($arch9) . "<br>";
        }
        fclose($arch9);
        ?>

        <p class="sub">3.10. Subir archivo:</p>
        <form action="componentes/subirarchivo.php" method="post" enctype="multipart/form-data">
            Selecciona una imagen para subirla:
            <br><br>
            <input type="file" name="subirArchivo" id="subirArchivo">
            <br><br>
            <input type="submit" value="Subir Imagen" name="subir">
        </form>
    </body>
</html>
