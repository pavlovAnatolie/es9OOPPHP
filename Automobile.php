<?php
class Automobile extends Veicolo{
    protected $modello;

    function __construct($marca, $anno, $modello){
        parent::__construct($marca,$anno);
        $this->modello = $modello;
    }
    function getModello(){
        return $this->modello;
    }


    function setModello($modello){
        $this->modello = $modello;
    }

    function toString(){
        return parent ::toString() ." ". $this->modello;
    }
}