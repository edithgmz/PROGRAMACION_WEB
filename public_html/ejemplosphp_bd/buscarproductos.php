<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Buscar Productos</title>
        <style>
            img{
                width: 105px;
                height: 105px;
            }
        </style>
    </head>
    <body>
        <h2>Buscar Productos</h2>
        <hr>
        <p>
            Escriba el nombre del producto o una parte para hacer la búsqueda.
        </p>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Texto de búsqueda:
            <input type="text" size="20" name="textoBusqueda" id="textoBusqueda">
            <br><br>
            <input type="submit" value="   Buscar   ">
            <br><br>
        </form>
        <?php
        //Validar envío de formulario y que se escribió un texto a buscar
        if (isset($_POST['textoBusqueda']) and $_POST['textoBusqueda'] <> "") {
            //echo "Formulario enviado.";
            //Conexión
            include "../componentesphp/conexion.php";
            //Leer texto de búsqueda del formulario
            $texto = $_POST['textoBusqueda'];
            //echo "Texto a buscar: " . $texto;
            //Consulta para obtener todos los productos con cierto texto en el nombre
        $consulta = "select idproducto, nombreproducto, precio, imagen, idcategoria from producto
                 where nombreproducto like '%" . $texto . "%'";
        //echo $consulta;
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
                        "<td>" .
                            "<img src='../imagenes/" . $fila['imagen'] . "'>" .
                        "</td>" . 
                        "<td>" . $fila['idcategoria'] . "</td>" . 
                    "</tr>";
        }
        echo "</table>";
        }
        ?>
    </body>
</html>
