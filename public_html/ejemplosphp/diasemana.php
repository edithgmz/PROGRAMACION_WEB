<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Día semana</title>
    </head>
    <body>
        <h2>Día semana</h2>
        <hr>
        <p>
            Se muestra el nombre del día de la semana con PHP
        </p>
        <?php
        $dia = date("D");
        switch ($dia){
            case "Mon":
                echo "Lunes";
                break;
            case "Tue":
                echo "Martes";
                break;
            case "Wed":
                echo "Miércoles";
                break;
            case "Thu":
                echo "Jueves";
                break;
            case "Fri":
                echo "Viernes";
                break;
            case "Sat":
                echo "Sábado";
                break;
            case "Sun":
                echo "Domingo";
                break;
            default:
                echo "Inválido";
        }
        echo "<br>";
        /*
         TODO: Agregar: Mostrar hora, nombre del mes y número de mes
         */
        $mes = date("M");
        switch ($mes){
            case "Jan":
                echo "Enero";
                break;
            case "Feb":
                echo "Febrero";
                break;
            case "Mar":
                echo "Marzo";
                break;
            case "Apr":
                echo "Abril";
                break;
            case "May":
                echo "Mayo";
                break;
            case "Jun":
                echo "Junio";
                break;
            case "Jul":
                echo "Julio";
                break;
            case "Aug":
                echo "Agosto";
                break;
            case "Sep":
                echo "Septiembre";
                break;
            case "Oct":
                echo "Octubre";
                break;
            case "Nov":
                echo "Noviembre";
                break;
            case "Dec":
                echo "Diciembre";
                break;
            default:
                echo "Inválido";
        }
        echo "<br>";
        $mesnum = date("m");
        switch ($mesnum){
            case 01:
                echo "Enero = 01";
                break;
            case 02:
                echo "Febrero = 02";
                break;
            case 03:
                echo "Marzo = 03";
                break;
            case 04:
                echo "Abril = 04";
                break;
            case 05:
                echo "Mayo = 05";
                break;
            case 06:
                echo "Junio = 06";
                break;
            case 07:
                echo "Julio = 07";
                break;
            case 08:
                echo "Agosto = 08";
                break;
            case 09:
                echo "Septiembre = 09";
                break;
            case 10:
                echo "Octubre = 10";
                break;
            case 11:
                echo "Noviembre = 11";
                break;
            case 12:
                echo "Diciembre = 12";
                break;
            default:
                echo "Inválido";
        }
        echo "<br>";
        $horas = date("h");
        $minutos = date("i");
        $segundos = date("s");
        $tiempo = date("A");
        echo "Hora: " . $horas . ":" . $minutos . ":" . $segundos . " " . $tiempo;
        ?>
    </body>
</html>
