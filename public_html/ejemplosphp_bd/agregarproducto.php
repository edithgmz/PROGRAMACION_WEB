<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Agregar Producto</title>
    </head>
    <body>
        <h2>Agregar Producto</h2>
        <p>
            Se recibe un formulario HTML con la información de un producto, se
            obtienen los datos y se agrega a la base de datos mediante una sentencia
            "insert".
        </p>
        <?php
        //Validar envío de formulario y recibir al menos el Id producto
        if (isset($_POST['idproducto']) and $_POST['idproducto'] <> "") {
            //Obtener datos del formulario
            $idproduc = $_POST['idproducto'];
            $nombre = $_POST['nomproducto'];
            $precio = $_POST['precio'];
            $imagen = $_POST['imagen'];
            $idcategoria = $_POST['idcategoria'];
            //Conexión de base de datos
            include '../componentesphp/conexion.php';
            //Construir sentencia de base de datos
            $sentencia = "insert into producto values($idproduc, '$nombre', $precio, '$imagen', $idcategoria)";
            echo "<br><br>";
            echo $sentencia;
            //Ejecutar sentencia en la base de datos
            $resultado = mysqli_query($conexion, $sentencia);
            $numero = mysqli_affected_rows($conexion);
            //Validar sentencia y agregado de registros
            if ($resultado == true and $numero == 1) {
                echo "<br><br>";
                echo "El producto: " . $idproduc . " con nombre: " . $nombre . " se agregó a la base de datos.";
            } else {
                echo "<br><br>";
                echo "ERROR: El producto: $idproduc con nombre: $nombre NO SE PUDO AGREGAR.";
            }
        } else {
            echo "Debe escribir datos del producto.";
        }
        ?>
    </body>
</html>
