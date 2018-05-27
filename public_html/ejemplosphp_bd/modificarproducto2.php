<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Modificar Producto</title>
    </head>
    <body>
        <h2>Modificar Producto</h2>
        <p>
            Recibe los datos del producto modificado y los guarda en la
            base de datos.
        </p>
        <?php
        //Validar envío de formulario y que se conoce el idproducto
        if (isset($_POST['idprod']) and $_POST['idprod'] <> "") {
            //Conexión
            include '../componentesphp/conexion.php';
            //Obtener los datos del producto modificados
            $idproduc1 = $_POST['idprod'];
            $nombreprod1 = $_POST['nombre'];
            $precio1 = $_POST['precio'];
            $imagen1 = $_POST['imagen'];
            $idcategoria1 = $_POST['idcategoria'];
            //Construir sentencia "update"
            $sentencia = "update producto set nombreproducto = '$nombreprod1', precio = $precio1, imagen = '$imagen1',
                     idcategoria = $idcategoria1 where idproducto = $idproduc1";
            echo "<br>$sentencia<br>";
            //Ejecutar sentencia
            $resultado = mysqli_query($conexion, $sentencia);
            $numero = mysqli_affected_rows($conexion);
            if ($resultado and $numero == 1) {
                echo "Modificado el producto: $idproduc1";
            } else {
                echo "ERROR: No se pudo modificar el producto con id: $idproduc1";
            }
        } else {
            echo "Debe elegir un producto.";
        }
        ?>
    </body>
</html>
