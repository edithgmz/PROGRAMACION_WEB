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
        <title>Excepciones PHP</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h3>8. Excepciones PHP</h3>
    </table>
    <?php

    class excepcionPersonalizada extends Exception {

        public function msjError() {
            $msjError = 'Error en línea ' . $this->getLine() . ' en ' . $this->getFile()
                    . ': <b>' . $this->getMessage() . '</b> no es una dirección de correo electrónico válida.';
            return $msjError;
        }

    }

    $correo = "edith.gomez4@outlook.com";

    try {
        if (filter_var($correo, FILTER_VALIDATE_EMAIL) === FALSE) {
            throw new excepcionPersonalizada($correo);
        }
        if (strpos($correo, "outlook") !== FALSE) {
            throw new Exception("$correo es una dirección de correo electrónico outlook.");
        }
    } catch (excepcionPersonalizada $e) {
        echo $e->msjError();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    ?>
</body>
</html>
