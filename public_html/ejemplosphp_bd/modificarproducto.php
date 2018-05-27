<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Modificar Producto</title>
    </head>
    <body>
        <h2>Modificar Producto</h2>
        <p>
            Se reciben los datos del producto a modificar. Se hace una consulta "select" para
            recuperar todos los campos de ese producto. <br>
            Éstos datos se "ponen" en un formulario HTML para que el usuario los pueda editar
            y los datos modificados se envían a otra página PHP que realice el "update" en la
            base de datos.
        </p>
        <?php
        //Obtener datos del producto
        //Validar que se tienen el id y el nombre del producto
        if (isset($_GET['id']) and $_GET['id'] <> "" and isset($_GET['nombreproducto']) and $_GET['nombreproducto'] <> "") {
            //Obtener id y nombre
            $idproduc = $_GET['id'];
            $nombreproduc = $_GET['nombreproducto'];
            //Conexión a la base de datos
            include '../componentesphp/conexion.php';
            //Construir sentencia de consulta
            $sentencia = "select idproducto, nombreproducto, precio, imagen, idcategoria from producto
                                  where idproducto = $idproduc";
            //echo "<br>" . $sentencia . "<br>";
            //Ejecutar sentencia
            $resultado = mysqli_query($conexion, $sentencia);
            //Recuperar datos del producto en variables de PHP
            if($resultado){
                $fila = mysqli_fetch_array($resultado);
                $precio1 = $fila['precio'];
                $imagen1 = $fila['imagen'];
                $idcategoria1 = $fila['idcategoria'];
            }
        } else {
            echo "Debe elegir un producto.";
        }
        ?>
        <!--
        Construir un formulario HTML con los datos del producto obtenidos de la base de datos
        y recuperados en variables PHP
        -->
        <form method="post" action="modificarproducto2.php">
            Id Producto
            <input type="number" name="idprod" id="idprod" value="<?php echo $idproduc; ?>" readonly>
            <br>
            <br>
            Nombre Producto
            <input type="text" name="nombre" id="nombre" value="<?php echo $nombreproduc; ?>">
            <br>
            <br>
            Precio
            <input type="text" name="precio" id="precio" value="<?php echo $precio1; ?>">
            <br>
            <br>
            Imagen
            <input type="text" name="imagen" id="imagen" value="<?php echo $imagen1; ?>">
            <br>
            <br>
            Id Categoría
            <input type="number" name="idcategoria" id="idcategoria" value="<?php echo $idcategoria1; ?>">
            <br>
            <br>
            <br>
            <input type="submit" value="    Modificar    ">
        </form>
    </body>
</html>
