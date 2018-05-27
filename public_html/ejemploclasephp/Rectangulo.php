<?php

class Rectangulo {

    //Declarar atributos
    private $ancho = 0;
    private $alto = 0;

    #Métodos
    //Constructor
    public function __construct($ancho1, $alto1) {
        $this->ancho = $ancho1;
        $this->alto = $alto1;
    }

    //Método para obtener el perímetro
    public function getPerimetro() {
        return (2 * ($this->ancho + $this->alto));
    }

    //Método para obtener el área
    public function getArea() {
        return ($this->ancho * $this->alto);
    }

    //Métodos get para cada variable
    function getAncho() {
        return $this->ancho;
    }

    function getAlto() {
        return $this->alto;
    }

    //Métodos set para cada variable
    function setAncho($ancho) {
        $this->ancho = $ancho;
    }

    function setAlto($alto) {
        $this->alto = $alto;
    }

}
