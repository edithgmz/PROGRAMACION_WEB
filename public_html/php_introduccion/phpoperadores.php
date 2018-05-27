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
        <title>Operadores PHP</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h3>5. Operadores PHP</h3>
        <?php
        $n = 8;
        $m = 2;
        $o;
        $p = "8";

        echo "n = $n <br>";
        echo "m = $m <br>";

        #Aritméticos
        echo "<p class='sub'> 5.1. Operadores aritméticos </p>";
        echo "Suma (n + m): <br>";
        echo $n + $m;
        echo "<br><br>";
        echo "Resta (n - m): <br>";
        echo $n - $m;
        echo "<br><br>";
        echo "Multiplicación (n * m): <br>";
        echo $n * $m;
        echo "<br><br>";
        echo "División (n / m): <br>";
        echo $n / $m;
        echo "<br><br>";
        echo "Módulo (n % m): <br>";
        echo $n % $m;
        echo "<br><br>";
        echo "Exponenciación (n ** m): <br>";
        echo $n ** $m;
        echo "<br><br>";
        ?>

        <?php
        #Asignación
        echo "<p class='sub'> 5.2. Operadores de asignación </p>";
        echo "Igual a (o = n): <br>";
        echo $o = $n;
        echo "<br><br>";
        echo "Suma (o += n): <br>";
        echo $o += $n;
        echo "<br><br>";
        echo "Resta (o -= n): <br>";
        echo $o -= $n;
        echo "<br><br>";
        echo "Multiplicación (o *= n): <br>";
        echo $o *= $n;
        echo "<br><br>";
        echo "División (o /= n): <br>";
        echo $o /= $n;
        echo "<br><br>";
        echo "Módulo (o %= n): <br>";
        echo $o %= $n;
        echo "<br><br>";
        ?>

        <?php
        #Comparación
        echo "<p class='sub'> 5.3. Operadores de comparación </p>";
        echo "Iguales (n == p): <br>";
        var_dump($n == $p);
        echo "<br>";
        echo "Idénticos (n === p): <br>";
        var_dump($n === $p);
        echo "<br>";
        echo "Diferentes (n != p): <br>";
        var_dump($n != $p);
        echo "<br>";
        echo "Diferentes (n <> p): <br>";
        var_dump($n <> $p);
        echo "<br>";
        echo "No idénticos (n !== p): <br>";
        var_dump($n !== $p);
        echo "<br>";
        echo "Mayor que (n > m): <br>";
        var_dump($n > $m);
        echo "<br>";
        echo "Menor que (n < m): <br>";
        var_dump($n < $m);
        echo "<br>";
        echo "Mayor que o igual (n >= m): <br>";
        var_dump($n >= $m);
        echo "<br>";
        echo "Menor que o igual (n <= m): <br>";
        var_dump($n <= $m);
        echo "<br>";
        ?>

        <?php
        #Incremento/Decremento
        echo "<p class='sub'> 5.4. Operadores incremento/decremento </p>";
        echo "Pre-incremento (++n): <br>";
        echo ++$n;
        echo "<br><br>";
        echo "Post-incremento (m++): <br>";
        echo $m++;
        echo "<br><br>";
        echo "Pre-decremento (--n): <br>";
        echo --$n;
        echo "<br><br>";
        echo "Post-decremento (m--): <br>";
        echo $m--;
        echo "<br><br>";
        ?>

        <?php
        #Lógicos
        echo "<p class='sub'> 5.5. Operadores lógicos </p>";
        if ($n == 8 and $m == 2) {
            echo "Operador <b>and</b>";
            echo "<br>";
            echo "n = 8 and m = 2";
        }
        echo "<br><br>";
        if ($n == 15 or $m == 2) {
            echo "Operador <b>or</b>";
            echo "<br>";
            echo "n = 15 or m = 2";
        }
        echo "<br><br>";
        if ($n == 8 xor $m == 35) {
            echo "Operador <b>xor</b>";
            echo "<br>";
            echo "n = 8 xor m = 35";
        }
        echo "<br><br>";
        if ($n == 8 && $m == 2) {
            echo "Operador <b>&&</b>";
            echo "<br>";
            echo "n = 8 && m = 2";
        }
        echo "<br><br>";
        if ($n == 15 || $m == 2) {
            echo "Operador <b>||</b>";
            echo "<br>";
            echo "n = 15 || m = 2";
        }
        echo "<br><br>";
        if ($n !== 15) {
            echo "Operador <b>and</b>";
            echo "<br>";
            echo "n !== 15";
        }
        echo "<br><br>";
        ?>

        <?php
        #Cadenas
        echo "<p class='sub'> 5.6. Operadores de cadenas </p>";
        $txt1 = "Programación";
        $txt2 = " Web";
        $op1 = ".";
        $op2 = ".=";
        echo "Cadena 1: " . $txt1 . "<br>";
        echo "Cadena 2: " . $txt2 . "<br><br>";
        echo "Operador: " . $op1 . "<br>";
        echo "Cadenas concatenadas: " . $txt1 . $txt2;
        echo "<br><br>";
        echo "Operador: " . $op2 . "<br>";
        $txt1 .= $txt2;
        echo "Cadenas concatenadas: " . $txt1;
        echo "<br><br>";
        ?>

        <?php
        #Arreglos
        echo "<p class='sub'> 5.7. Operadores de arreglos </p>";
        $arr1 = array("a" => "rojo", "b" => "verde", "c" => "azul", "d" => "amarillo");
        $arr2 = array("e" => "gato", "f" => "perro", "g" => "conejo", "h" => "hurón");
        echo "Arreglo 1: <br>";
        print_r($arr1);
        echo "<br><br>";
        echo "Arreglo 2: <br>";
        print_r($arr2);
        echo "<br><br>";
        echo "Unión: <br>";
        print_r($arr1 + $arr2);
        echo "<br><br>";
        echo "Igualdad: <br>";
        var_dump($arr1 == $arr2);
        echo "Idénticos: <br>";
        var_dump($arr1 === $arr2);
        echo "Diferente: <br>";
        var_dump($arr1 != $arr2);
        echo "Diferente: <br>";
        var_dump($arr1 <> $arr2);
        echo "No Idénticos: <br>";
        var_dump($arr1 !== $arr2);
        ?>
    </body>
</html>
