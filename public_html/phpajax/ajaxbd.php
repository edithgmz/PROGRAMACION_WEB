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
        <title>AJAX Base de Datos</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <?php
        $q = intval($_GET['q']);
        
        $host = 'localhost';
        $usser = 'root';
        $pass = 'root'; //Si no se tiene contraseña debe dejarse en blanco este campo
        $bd = 'personas';
        
        $conexion = mysqli_connect($host, $usser, $pass, $bd);
        if (!$conexion) {
            die('No se puede conectar: ' . mysqli_error($conexion));
        }

        mysqli_select_db($conexion, $bd);
        $sql = "select * from persona where id = '" . $q . "'";
        $resultado = mysqli_query($conexion, $sql);

        echo "<table>
            <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Ciudad natal</th>
            <th>Ocupación</th>
            </tr>";
        while ($fila = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila['nombre'] . "</td>";
            echo "<td>" . $fila['apellido'] . "</td>";
            echo "<td>" . $fila['edad'] . "</td>";
            echo "<td>" . $fila['ciudadnatal'] . "</td>";
            echo "<td>" . $fila['ocupacion'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($conexion);
        ?>
    </body>
</html>
