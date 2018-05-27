<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mostrar Productos</title>
    </head>
    <body>
        <h2>Mostrar Productos</h2>
        <hr>
        <p>
            Se muestran todos los productos
        </p>
        <?php
        //Conectarse a la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "programacionweb");
        //Validar si la conexión tuvo éxito
        if(mysqli_connect_errno()){
            echo "Error en conexión de BD: " . mysqli_connect_error();
        }
        //Consulta para obtener todos los productos
        $consulta = "select idproducto, nombreproducto, precio, imagen, idcategoria from producto order by idproducto";
        echo $consulta;
        //Ejecutar sentencia de BD
        $resultado = mysqli_query($conexion, $consulta);
        //Mostrar productos en una tabla
        echo "<table border='1'>
                    <tr>
                        <th>Id Producto</th>
                        <th>Nombre Producto</th>
                        <th>Precio</th>
                        <th>Imagen</th>
                        <th>Id Categoría</th>
                     </tr>";
        //Iterar en cada producto
        while($fila = mysqli_fetch_array($resultado)){
            echo "<tr>" .
                        "<td>" . $fila['idproducto'] . "</td>" . 
                        "<td>" . $fila['nombreproducto'] . "</td>" . 
                        "<td>" . $fila['precio'] . "</td>" . 
                        "<td>" . $fila['imagen'] . "</td>" . 
                        "<td>" . $fila['idcategoria'] . "</td>" . 
                    "</tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>
