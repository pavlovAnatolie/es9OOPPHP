<?php
class Veicolo{
    protected $marca;
    protected $anno;

    function __construct($marca, $anno){
        $this->marca = $marca;
        $this->anno = $anno;
    }

    function getMarca(){
        return $this->marca;
    }

    function getAnno(){
        return $this->anno;
    }
    function toString(){
        return $this->marca ." ". $this->anno;
    }
}