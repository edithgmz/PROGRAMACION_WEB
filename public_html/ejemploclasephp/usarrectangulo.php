<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Usar Rectángulo</title>
    </head>
    <body>
        <h2>Usar Rectángulo</h2>
        <p>
            Se usa la clase "Rectangulo", se crean objetos de la clase
            y se invocan los métodos.
        </p>
        <hr>
        <?php
        //Usar Rectangulo
        include "./Rectangulo.php";
        //Declarar objetos
        $rec1 = new Rectangulo(10, 20);
        $rec2 = new Rectangulo(30, 40);
        $rec2->setAncho(30);
        $rec2->setAlto(40);
        //Visualizar datos del objeto rec1
        echo "<b>Objeto rec1</b><br>";
        echo "Ancho: " . $rec1->getAncho() . "<br>";
        echo "Alto: " . $rec1->getAlto() . "<br>";
        echo "Perímetro: " . $rec1->getPerimetro() . "<br>";
        echo "Área: " . $rec1->getArea() . "<br><br>";
        //Visualizar datos del objeto rec2
        echo "<b>Objeto rec2</b><br>";
        echo "Ancho: " . $rec2->getAncho() . "<br>";
        echo "Alto: " . $rec2->getAlto() . "<br>";
        echo "Perímetro: " . $rec2->getPerimetro() . "<br>";
        echo "Área: " . $rec2->getArea() . "<br><br>";
        //Declarar y usar un arreglo de objetos de la clase Rectangulo
        $arregloObjetos = array(); //Es opcional
        for ($i = 1; $i <= 10; $i++) {
            $arregloObjetos[] = new Rectangulo($i, ($i * 2));
        }
        echo "<br><b>Uso de arreglo de objetos</b><br>";
        foreach ($arregloObjetos as $rec) {
            echo "Dimensión (ancho, alto): " . $rec->getAncho() . ", " . $rec->getAlto();
            echo "<br>";
        }
        ?>
    </body>
</html>
