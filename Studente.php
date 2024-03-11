<?php
//si puo fare l-iclude della classe persona ma non serve a nulla in quato il risultato e lo stesso
class Studente extends Persona{
    private $matricola;

    function __construct($nome, $cognome,$matricola){
        parent::__construct($nome, $cognome);
        $this->matricola = $matricola;

    }

    function presentati(){
        return parent::presentati()." ".$this->matricola;
    }
}
//se attributi private allora accessibile tramite metodo
//se attributi protected allora accessibile tramite metodo
//se public accessibile da per tutto