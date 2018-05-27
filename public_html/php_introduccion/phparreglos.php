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
        <title>Arreglos PHP</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h3>9. Arreglos PHP</h3>
        <?php
        #Arreglo indexado
        echo "<p class='sub'> 9.1. Arreglo indexado </p>";
        
        #El índice puede añadirse automáticamente
        $nombres = array("Samuel", "Alfredo", "Akemi", "Dai");
        
        #O manualmente
        $nombres[4] = "William";
        $nombres[5] = "Frank";
        $nombres[6] = "Ronnie";
        $nombres[7] = "Askar";
        
        echo "Nombres: <br>";
        echo $nombres[0] . "<br>";
        echo $nombres[1] . "<br>";
        echo $nombres[2] . "<br>";
        echo $nombres[3] . "<br>";
        echo $nombres[4] . "<br>";
        echo $nombres[5] . "<br>";
        echo $nombres[6] . "<br>";
        echo $nombres[7];
        
        echo "<br>";
        ?>

        <?php
        #Bucle en un arreglo indexado
        echo "<p class='sub2'> 9.1.1. Bucle a través de un arreglo indexado </p>";
        
        $tamNombres = count($nombres);
        
        for($i = 0; $i < $tamNombres; $i++){
            echo "Nombre $i: $nombres[$i] <br>";
        }
        
        echo "<br>";
        ?>

        <?php
        #Arreglo asociativo
        echo "<p class='sub'> 9.2. Arreglo asociativo </p>";
        
        #El índice puede añadirse automáticamente
        $edades = array("Samuel"=>"27", "Alfredo"=>"26", "Akemi"=>"25", "Dai"=>"20");
        
        #O manualmente
        $edades['William'] = "15";
        $edades['Frank'] = "16";
        $edades['Ronnie'] = "19";
        $edades['Askar'] = "18";
        
        echo "Edades: <br>";
        echo "Samuel tiene " . $edades['Samuel'] . " años" . "<br>";
        echo "Alfredo tiene " . $edades['Alfredo'] . " años" . "<br>";
        echo "Akemi tiene " . $edades['Akemi'] . " años" . "<br>";
        echo "Dai tiene " . $edades['Dai'] . " años" . "<br>";
        echo "William tiene " . $edades['William'] . " años" . "<br>";
        echo "Frank tiene " . $edades['Frank'] . " años" . "<br>";
        echo "Ronnie tiene " . $edades['Ronnie'] . " años" . "<br>";
        echo "Askar tiene " . $edades['Askar'] . " años";
        
        echo "<br>";
        ?>

        <?php
        #Bucle en un arreglo asociativo
        echo "<p class='sub2'> 9.2.1. Bucle a través de un arreglo asociativo </p>";
        
        foreach($edades as $j => $j_val){
            echo "Clave: " . $j . ", Valor: " . $j_val . "<br>";
        }
        
        echo "<br>";
        ?>

        <?php
        #Función count()
        echo "<p class='sub'> 9.3. Obtener el tamaño de un arreglo: Función <em> count() </em> </p>";
        
        echo "Tamaño del arreglo 'Nombres': " . count($nombres);
        echo "<br><br>";
        echo "Tamaño del arreglo 'Edades': " . count($edades);
        ?>

        <?php
        #Funciones para ordenar arreglos
        echo "<p class='sub'> 9.4. Funciones para ordenar arreglos </p>";
        
        echo "Arreglos a ordenar: <br>";
        echo "<br>";
        echo "Nombres: <br>";
        for($i = 0; $i < $tamNombres; $i++){
            echo "$nombres[$i] <br>";
        }
        echo "<br>";
        echo "Edades: <br>";
        foreach($edades as $j => $j_val){
            echo "Clave: " . $j . ", Valor: " . $j_val . "<br>";
        }
        echo "<br>";
        $numeros = array(12, 45, 23, 76, 34, 45, 89);
        $tamNumeros = count($numeros);
        echo "Números: <br>";
        for($k = 0; $k < $tamNumeros; $k++){
            echo "$numeros[$k] <br>";
        }
        
        #Función sort()
        echo "<p class='sub2'> 9.4.1. Orden ascendente: Función <em>sort()</em> </p>";
        
        sort($nombres);
        echo "Arreglo 'Nombres' en orden ascendente: <br>";
        for($i = 0; $i < $tamNombres; $i++){
            echo "$nombres[$i] <br>";
        }
        
        echo "<br>";
        
        sort($numeros);
        echo "Arreglo 'Números' en orden ascendente: <br>";
        for($k = 0; $k < $tamNumeros; $k++){
            echo "$numeros[$k] <br>";
        }
        
        #Función rsort()
        echo "<p class='sub2'> 9.4.2. Orden descendente: Función <em>rsort()</em> </p>";
        
        rsort($nombres);
        echo "Arreglo 'Nombres' en orden descendente: <br>";
        for($i = 0; $i < $tamNombres; $i++){
            echo "$nombres[$i] <br>";
        }
        
        echo "<br>";
        
        rsort($numeros);
        echo "Arreglo 'Números' en orden descendente: <br>";
        for($k = 0; $k < $tamNumeros; $k++){
            echo "$numeros[$k] <br>";
        }
        
        #Función asort()
        echo "<p class='sub2'> 9.4.3. Orden ascendente según el valor: Función <em>asort()</em> </p>";
        
        asort($edades);
        echo "Arreglo 'Edades' en orden ascendente según el valor: <br>";
        foreach($edades as $j => $j_val){
            echo "Clave: " . $j . ", Valor: " . $j_val . "<br>";
        }
        
        #Función ksort()
        echo "<p class='sub2'> 9.4.4. Orden ascendente según la clave: Función <em>ksort()</em> </p>";
        
        ksort($edades);
        echo "Arreglo 'Edades' en orden ascendente según la clave: <br>";
        foreach($edades as $j => $j_val){
            echo "Clave: " . $j . ", Valor: " . $j_val . "<br>";
        }
        
        #Función arsort()
        echo "<p class='sub2'> 9.4.5. Orden descendente según el valor: Función <em>arsort()</em> </p>";
        
        arsort($edades);
        echo "Arreglo 'Edades' en orden descendente según el valor: <br>";
        foreach($edades as $j => $j_val){
            echo "Clave: " . $j . ", Valor: " . $j_val . "<br>";
        }
        
        #Función krsort()
        echo "<p class='sub2'> 9.4.6. Orden descendente según la clave: Función <em>krsort()</em> </p>";
        
        krsort($edades);
        echo "Arreglo 'Edades' en orden descendente según la clave: <br>";
        foreach($edades as $j => $j_val){
            echo "Clave: " . $j . ", Valor: " . $j_val . "<br>";
        }
        ?>
    </body>
</html>
