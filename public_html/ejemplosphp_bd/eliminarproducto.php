<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Eliminar Producto</title>
    </head>
    <body>
        <h2>Eliminar Producto</h2>
        <p>
            Elimina el producto seleccionado de la base de datos. Confirma al usuario si el producto
            se pudo eliminar.
        </p>
        <?php
        //Validar que se tienen datos del producto a eliminar
        if (isset($_GET['id']) and $_GET['id'] <> "" and isset($_GET['nombreproducto']) and $_GET['nombreproducto'] <> "") {
            echo "Producto elegido: " . $_GET['id'];
            //Conexión a la base de datos
            include '../componentesphp/conexion.php';
            //Construir sentencia de eliminación
            $sentencia = "delete from producto where idproducto=" . $_GET['id'];
            echo  "<br>" . $sentencia . "<br>";
            $resultado = mysqli_query($conexion, $sentencia);
            //Obtener número de filas afectadas
            $numero = mysqli_affected_rows($conexion);
            if ($resultado and $numero == 1) {
                echo "El producto con id: " . $_GET['id'] . " con nombre: " . $_GET['nombreproducto'] . " ha sido eliminado.";
            } else {
                echo "ERROR: El producto con id: " . $_GET['id'] . " con nombre: " . $_GET['nombreproducto'] .
                        " no pudo ser eliminado.";
            }
        } else {
            echo "Debe elegir un producto.";
        }
        ?>
    </body>
</html>
